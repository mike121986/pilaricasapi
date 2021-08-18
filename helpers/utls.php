<?php

class Utls{

    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
                $_SESSION[$name] = null;
                unset($_SESSION[$name]);
        }
        return $name;
    }
    public static function getApellido($apellido){
        $second = "";
        $dato = explode(' ',$apellido);
        
        $primer = $dato[0];
        if(isset($dato[1])){
            $datoDos = $dato[1];
            $second = SED::decryption($datoDos);
        }

        return ucwords(SED::decryption($primer).' '.$second);
    }

    public static function createId($sesionConsultorio,$idbd){
        $increment=0;
        $Ano = date('Y');
        $mes = date('m'); 
        $consultorio = ($sesionConsultorio >= 10) ? $sesionConsultorio : '0'.$sesionConsultorio ;
        if($mes === '01'){
            $increment = '0001';
        }else{
            if ($idbd == '1') {
                $increment = '0001';
            }else{
                $increment = substr($idbd,7); 
            }
        }

        return $consultorio.$Ano.$mes.$increment;
    }

    public static function getSeccion($seccion){
        $nameSEccion = '';
        if($seccion == ''){
            $nameSEccion = 'clienteMunicipio';
        }elseif($seccion == 'heredofamiliar'){
            $nameSEccion = 'enfermedadfamiliar';
        }elseif($seccion == 'patologico'){
            $nameSEccion = 'antecedentespatologicos';
        }elseif($seccion == 'cirugia'){
            $nameSEccion = 'cirugia';
        }elseif($seccion == 'mujer'){
            $nameSEccion = 'datosmujer';
        }elseif($seccion == 'anterior'){
            $nameSEccion = 'tratameintoactual';
        }

        return $nameSEccion;
    }

    public static function titleCabecera($titleGet){
        $controlador = $titleGet['controller'];
        switch ($controlador) {
            case 'Avanzado':
                if($_GET['action'] == "index"){
                    $getTirulo = "Menu Administrativo";
                }elseif($_GET['action'] == 'pacientes'){
                    $getTirulo = "Listado De Paciente";                
                }elseif($_GET['action'] == 'Historial'){
                    $getTirulo = "Historial Paciente";
                }elseif($_GET['action'] == 'consultorios'){
                    $getTirulo = "Listado De Consultorios";
                }elseif($_GET['action'] == 'movimientos'){
                    $getTirulo = "<small>Registro </small>";
                }elseif($_GET['action'] == 'reporte'){
                    $getTirulo = "Reporte Global";
                }
                break;
            case 'Consultorio':
                if($_GET['action'] == "nuevo"){
                    $getTirulo = "Nuevo Ingreso";
                }elseif($_GET['action'] == 'control'){
                    $getTirulo = "Control";
                }elseif($_GET['action'] == 'corteDiario'){
                    $getTirulo = "Registro Diario";
                }elseif($_GET['action'] == 'gastos'){
                    $getTirulo = "Registrar Gastos";
                }elseif($_GET['action'] == 'index'){
                    $getTirulo = "Alta Consultorio";
                }
                break;
            case 'Paciente':
                if($_GET['action'] == 'index'){
                    $getTirulo = "Hoja Clinica";
                }elseif($_GET['action'] == 'editar'){
                    $getTirulo = "Editar Hoja Clinica";
                }elseif($_GET['action']== 'editarAntecedente'){
                    $getTirulo = "Editar Antecedentes";
                }elseif($_GET['action']== 'editarPatologico'){
                    $getTirulo = "Editar Patologicos";
                }elseif($_GET['action']== 'editarCirugia'){
                    $getTirulo = "Editar Cirugias";
                }elseif($_GET['action']== 'editarEmbarazo'){
                    $getTirulo = "Editar Datos Mujer";
                }elseif($_GET['action']== 'editarTratamiento'){
                    $getTirulo = "Control De Peso Anterior";
                }
                break;
            case 'Doctor':
                if($_GET['action'] == 'index'){
                    $getTirulo = "Alta Doctor";
                }elseif($_GET['action'] == 'listar'){
                    $getTirulo = "Lista Doctores";
                }elseif($_GET['action'] == 'editar'){
                    $getTirulo = "Editar Doctor";
                }
                break;
            default:
            case 'Consulta':
                if($_GET['action'] == "ingreso"){
                    $getTirulo = "Pagos Y Consultas";
                }else if($_GET['action'] == "index"){
                    $getTirulo = "Datos" ;
                }else if($_GET['action'] == "lista"){
                    $getTirulo = "Pacientes";
                }else if($_GET['action'] == "consultaDiaria"){
                    $getTirulo = "Consulta";
                }
                break;
            $getTirulo = "Bienestar Nueva Imagen";
                break;
        }
        return $getTirulo;
    }

    public static function disbled($nameSession){
        if($nameSession == 'dndMc3')
        return ' disabled=disabled ';
    } 

    public static function nameMonth($numberMonth){
        date_default_timezone_set("America/Mexico_City");

        $mes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"][$numberMonth - 1];

        return $mes;
    }

    public static function createDAte($date){
        $fecha = explode("-", $date);
        if(isset($fecha[2])){  
            if (preg_match("/^[0-9]{4}+$/", $fecha[2])) {
                $fechames = (Validacion::validarNumero($fecha[1]) == '-1') ? false : $fecha[1] ;
                $fechadia = (Validacion::validarNumero($fecha[0]) == '-1') ? false : $fecha[0] ;
                $fechaaño = (Validacion::validarNumero($fecha[2]) == '-1') ? false : $fecha[2] ;

                if(checkdate($fechames, $fechadia, $fechaaño)){
                    $checkday = Validacion::addZeroDate($fecha[0]);
                    $checkMonth = Validacion::addZeroDate($fecha[1]);    
                    return $fechaaño.$checkMonth.$checkday;
                    
                }else{
                    return "-100";
                }
            }else{

                return "-200";
            }
        }else{
            return "-300";
        }
    }

    public static function sinSession(){
        $_SESSION['errorLoguin'] = "NECESITAS CREDENCIALES PARA INGRESAR";
                    echo '<script>window.location="'.base_url.'"</script>';
    }

    public static function rutas(){
        require_once $_SERVER['DOCUMENT_ROOT']."/config/modeloBase.php";
        $datos = new ModeloBase();
        $datos -> getAll('ruta');

        return $datos;
    }
}
