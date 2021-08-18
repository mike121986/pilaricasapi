<?php
//require_once root_base;
 require_once $_SERVER['DOCUMENT_ROOT']."/config/modeloBase.php";


class Usuario extends ModeloBase{
    private $idPaciente;
    private $intputname;
    private $inputAppat;
    private $inputApmat;
    private $customRadioSexo;
    private $dateInicio;
    private $inpuEdad;
    private $inpuEstatura;
    private $inpuOcupacion;
    private $inpuEstadoCivil;
    private $inpuCelular;
    private $email;
    private $inpuRedSocial;
    private $idEstado;
    private $inpuMunicipio;
    private $inpuCP;
    private $inpuColonia;
    private $inpuCalle;
    private $deleteIdEnfermedad;
    private $inpuTelEmergencia;
    private $inpuParentesco;
    private $inpuNombreRecomienda;
    private $inpuMotivo;
    private $select;
    private $inputNombreMedicamento;
    private $cirugia;
    private $embarazo;
    private $terminoEmbarazo;
    private $aborto;
    private $fechaUltmoEmbarazo;
    private $periodo;
    private $anticonceptivo;
    private $medicamento;

    private $tabla;

    public function __construct() {
        parent::__construct();
    }
        /**
     * Get the value of tabla
     */ 
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set the value of tabla
     *
     * @return  self
     */ 
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }

    /**
     * @param mixed $idPaciente
     *
     * @return self
     */
    public function setIdPaciente($idPaciente)
    {
        $this->idPaciente = $idPaciente;

        return $this;
    }
        /**
     * @return mixed
     */
    public function getIntputname()
    {
        return SED::encryption($this->intputname);
    }

    /**
     * @param mixed $intputname
     *
     * @return self
     */
    public function setIntputname($intputname)
    {
        $this->intputname = $intputname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInputAppat()
    {
        return SED::encryption($this->inputAppat);
    }

    /**
     * @param mixed $inputAppat
     *
     * @return self
     */
    public function setInputAppat($inputAppat)
    {
        $this->inputAppat = $inputAppat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInputApmat()
    {
        return SED::encryption($this->inputApmat);
    }

    /**
     * @param mixed $inputApmat
     *
     * @return self
     */
    public function setInputApmat($inputApmat)
    {
        $this->inputApmat = $inputApmat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomRadioSexo()
    {
        return SED::encryption($this->customRadioSexo);
    }

    /**
     * @param mixed $customRadioSexo
     *
     * @return self
     */
    public function setCustomRadioSexo($customRadioSexo)
    {
        $this->customRadioSexo = $customRadioSexo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateInicio()
    {
        return $this->dateInicio;
    }

    /**
     * @param mixed $dateInicio
     *
     * @return self
     */
    public function setDateInicio($dateInicio)
    {
        $this->dateInicio = $dateInicio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuEdad()
    {
        return $this->inpuEdad;
    }

    /**
     * @param mixed $inpuEdad
     *
     * @return self
     */
    public function setInpuEdad($inpuEdad)
    {
        $this->inpuEdad = $inpuEdad;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuEstatura()
    {
        return $this->inpuEstatura;
    }

    /**
     * @param mixed $inpuEstatura
     *
     * @return self
     */
    public function setInpuEstatura($inpuEstatura)
    {
        $this->inpuEstatura = $inpuEstatura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuOcupacion()
    {
        return SED::encryption($this->inpuOcupacion);
    }

    /**
     * @param mixed $inpuOcupacion
     *
     * @return self
     */
    public function setInpuOcupacion($inpuOcupacion)
    {
        $this->inpuOcupacion = $inpuOcupacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuEstadoCivil()
    {
        return $this->inpuEstadoCivil;
    }

    /**
     * @param mixed $inpuEstadoCivil
     *
     * @return self
     */
    public function setInpuEstadoCivil($inpuEstadoCivil)
    {
        $this->inpuEstadoCivil = $inpuEstadoCivil;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuCelular()
    {
        return SED::encryption($this->inpuCelular);
    }

    /**
     * @param mixed $inpuCelular
     *
     * @return self
     */
    public function setInpuCelular($inpuCelular)
    {
        $this->inpuCelular = $inpuCelular;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuRedSocial()
    {
        return $this->inpuRedSocial;
    }

    /**
     * @param mixed $inpuRedSocial
     *
     * @return self
     */
    public function setInpuRedSocial($inpuRedSocial)
    {
        $this->inpuRedSocial = $inpuRedSocial;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * @param mixed $idEstado
     *
     * @return self
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getInpuMunicipio()
    {
        return $this->inpuMunicipio;
    }

    /**
     * @param mixed $inpuMunicipio
     *
     * @return self
     */
    public function setInpuMunicipio($inpuMunicipio)
    {
        $this->inpuMunicipio = $inpuMunicipio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuCP()
    {
        return $this->inpuCP;
    }

    /**
     * @param mixed $inpuCP
     *
     * @return self
     */
    public function setInpuCP($inpuCP)
    {
        $this->inpuCP = $inpuCP;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuColonia()
    {
        return SED::encryption($this->inpuColonia);
    }

    /**
     * @param mixed $inpuColonia
     *
     * @return self
     */
    public function setInpuColonia($inpuColonia)
    {
        $this->inpuColonia = $inpuColonia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuCalle()
    {
        return SED::encryption($this->inpuCalle);
    }

    /**
     * @param mixed $inpuCalle
     *
     * @return self
     */
    public function setInpuCalle($inpuCalle)
    {
        $this->inpuCalle = $inpuCalle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getdeleteIdEnfermedad()
    {
        return $this->deleteIdEnfermedad;
    }

    /**
     * @param mixed $deleteIdEnfermedad
     *
     * @return self
     */
     public function setdeleteIdEnfermedad($deleteIdEnfermedad)
     {
         $this->deleteIdEnfermedad = $deleteIdEnfermedad;

         return $this;
     }

    /**
     * @return mixed
     */
    public function getInpuTelEmergencia()
    {
        return SED::encryption($this->inpuTelEmergencia);
    }

    /**
     * @param mixed $inpuTelEmergencia
     *
     * @return self
     */
    public function setInpuTelEmergencia($inpuTelEmergencia)
    {
        $this->inpuTelEmergencia = $inpuTelEmergencia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuParentesco()
    {
        return SED::encryption($this->inpuParentesco);
    }

    /**
     * @param mixed $inpuParentesco
     *
     * @return self
     */
    public function setInpuParentesco($inpuParentesco)
    {
        $this->inpuParentesco = $inpuParentesco;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuNombreRecomienda()
    {
        return SED::encryption($this->inpuNombreRecomienda);
    }

    /**
     * @param mixed $inpuNombreRecomienda
     *
     * @return self
     */
    public function setInpuNombreRecomienda($inpuNombreRecomienda)
    {
        $this->inpuNombreRecomienda = $inpuNombreRecomienda;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInpuMotivo()
    {
        return SED::encryption($this->inpuMotivo);
    }

    /**
     * @param mixed $inpuMotivo
     *
     * @return self
     */
    public function setInpuMotivo($inpuMotivo)
    {
        $this->inpuMotivo = $inpuMotivo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * @param mixed $select
     *
     * @return self
     */
    public function setSelect($select)
    {
        $this->select = $select;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInputNombreMedicamento()
    {
        return SED::encryption($this->inputNombreMedicamento);
    }

    /**
     * @param mixed $inputNombreMedicamento
     *
     * @return self
     */
    public function setInputNombreMedicamento($inputNombreMedicamento)
    {
        $this->inputNombreMedicamento = $inputNombreMedicamento;

        return $this;
    }

    
    /**
     * Get the value of cirugia
     */ 
    public function getCirugia()
    {
        return $this->cirugia;
    }

    /**
     * Set the value of cirugia
     *
     * @return  self
     */ 
    public function setCirugia($cirugia)
    {
        $this->cirugia = $cirugia;

        return $this;
    }

      /**
     * Get the value of anticonceptivo
     */ 
    public function getAnticonceptivo()
    {
        return $this->anticonceptivo;
    }

    /**
     * Set the value of anticonceptivo
     *
     * @return  self
     */ 
    public function setAnticonceptivo($anticonceptivo)
    {
        $this->anticonceptivo = $anticonceptivo;

        return $this;
    }

    /**
     * Get the value of embarazo
     */ 
    public function getEmbarazo()
    {
        return $this->embarazo;
    }

    /**
     * Set the value of embarazo
     *
     * @return  self
     */ 
    public function setEmbarazo($embarazo)
    {
        $this->embarazo = $embarazo;

        return $this;
    }

    /**
     * Get the value of terminoEmbarazo
     */ 
    public function getTerminoEmbarazo()
    {
        return $this->terminoEmbarazo;
    }

    /**
     * Set the value of terminoEmbarazo
     *
     * @return  self
     */ 
    public function setTerminoEmbarazo($terminoEmbarazo)
    {
        $this->terminoEmbarazo = $terminoEmbarazo;

        return $this;
    }

    /**
     * Get the value of aborto
     */ 
    public function getAborto()
    {
        return $this->aborto;
    }

    /**
     * Set the value of aborto
     *
     * @return  self
     */ 
    public function setAborto($aborto)
    {
        $this->aborto = $aborto;

        return $this;
    }

    /**
     * Get the value of fechaUltmoEmbarazo
     */ 
    public function getFechaUltmoEmbarazo()
    {
        return $this->fechaUltmoEmbarazo;
    }

    /**
     * Set the value of fechaUltmoEmbarazo
     *
     * @return  self
     */ 
    public function setFechaUltmoEmbarazo($fechaUltmoEmbarazo)
    {
        $this->fechaUltmoEmbarazo = $fechaUltmoEmbarazo;

        return $this;
    }

    /**
     * Get the value of periodo
     */ 
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set the value of periodo
     *
     * @return  self
     */ 
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

        /**
     * Get the value of medicamento
     */ 
    public function getMedicamento()
    {
        return $this->medicamento;
    }

    /**
     * Set the value of medicamento
     *
     * @return  self
     */ 
    public function setMedicamento($medicamento)
    {
        $this->medicamento = $medicamento;

        return $this;
    }


    public function getMunModels(){
    	$consulta = "SELECT mp.idMunicipio,mp.municipio,es.estado FROM estados_municipios esmp
									INNER JOIN municipios mp
									ON esmp.municipios_id = mp.idMunicipio
									INNER JOIN estados es
									ON esmp.estados_id = es.idEstado
									WHERE es.idEstado = {$this->getIdEstado()}";
    	$query = $this->db->query($consulta);

        return $query;
    }

    public function insertPaciente(){
        $insert = "INSERT INTO cliente
        (idCliente, nombreCliente, apPatCliente, apMatCliente, generoCliente,edadCliente,fechaNacimientoCliente, estaturaCliente,ocupacionCliente, estadoCivilCliente,celCliente, correoCliente, redSocialCliente,calleCliente,cpCliente,coliniaCliente,idMuncipioCliente,nombreRecomiendaCliente,motivoCliente, telefonoEmergencia,parentescoEmergenciaCliente, medicamentoAnteriorCliente,envioCliente, fechaAltaCliente, statusCliente)
        VALUES ('{$this->getIdPaciente()}', '{$this->getIntputname()}', '{$this->getInputAppat()}', '{$this->getInputApmat()}', '{$this->getCustomRadioSexo()}', '{$this->getInpuEdad()}', '{$this->getDateInicio()}', '{$this->getInpuEstatura()}', '{$this->getInpuOcupacion()}', '{$this->getInpuEstadoCivil()}', '{$this->getInpuCelular()}', '{$this->getEmail()}', '{$this->getInpuRedSocial()}', '{$this->getInpuCalle()}', '{$this->getInpuCP()}', '{$this->getInpuColonia()}', '{$this->getInpuMunicipio()}', '{$this->getInpuNombreRecomienda()}', '{$this->getInpuMotivo()}', '{$this->getInpuTelEmergencia()}', '{$this->getInpuParentesco()}', '{$this->getInputNombreMedicamento()}', '1', NOW(), '1')";

       $guardar = $this->db->query($insert);

        $result = false;
        if($guardar){
            $result = true;
        }

        return $result;
    }

    public function insertEnfermedad(){
        $result = false;
        foreach($this->getSelect() as $valor){
            $insertEnfermedad = "INSERT INTO {$this->getTabla()}
            VALUES (null,'{$this->getIdPaciente()}', '{$valor[0]}', '{$valor[2]}', '{$valor[1]}')";
            $guardar = $this->db->query($insertEnfermedad);

            if($guardar){
                $result = true;
            }

        }
        return $result;
    }

    public function insertCiruguias(){
        $result = false;
        foreach($this->getCirugia() as $valor){
            $cirugia = "INSERT INTO {$this->getTabla()}
            VALUES (null,'{$this->getIdPaciente()}', '{$valor[0]}', '{$valor[1]}')";
            $guardar = $this->db->query($cirugia);

           
            if($guardar){
                $result = true;
            }
        }
        return $result;
    }

    public function insertDatoMujer(){
        $insert = "INSERT INTO datosmujer
        (idDatoMujer, idclienteDatoMujer, numEmbarazosDatoMujer, naciTerminoEmbarazoDatoMujer, abortoDatoMujer, fechaUltimoEmbarazoDatoMujer, ultimaPeriodoDatoMujer,anticonceptivoDatoMujer)
        VALUES (NULL,'{$this->getIdPaciente()}','{$this->getEmbarazo()}','{$this->getTerminoEmbarazo()}','{$this->getAborto()}','{$this->getFechaUltmoEmbarazo()}','{$this->getPeriodo()}','{$this->getAnticonceptivo()}')";
        $saveMujer = $this->db->query($insert);
        $insertM = false;
        if($saveMujer){
            $insertM = true;
        }    
        return $insertM;
    }
    public function insertControl(){
        $insert = "INSERT INTO tratameintoactual
        (idTratamiento, idClientesConotrol, nombreMedicamento)
        VALUES (NULL, '{$this->getIdPaciente()}', '{$this->getMedicamento()}')";

        $saveControl = $this->db->query($insert);
       
        $controlMedicamento = false;
        if($saveControl){
            $controlMedicamento = true;
        }    
        return $controlMedicamento;
    }

    public function updatePersonalModels(){
        $query = "UPDATE cliente
        SET
            nombreCliente='{$this->getIntputname()}',
            apPatCliente='{$this->getInputAppat()}',
            apMatCliente='{$this->getInputApmat()}',
            generoCliente='{$this->getCustomRadioSexo()}',
            edadCliente='{$this->getInpuEdad()}',
            fechaNacimientoCliente='{$this->getDateInicio()}',
            estaturaCliente='{$this->getInpuEstatura()}',
            ocupacionCliente='{$this->getInpuOcupacion()}',
            estadoCivilCliente='{$this->getInpuEstadoCivil()}',
            celCliente='{$this->getInpuCelular()}',
            correoCliente='{$this->getEmail()}',
            redSocialCliente='{$this->getInpuRedSocial()}',
            calleCliente='{$this->getInpuCalle()}',
            cpCliente='{$this->getInpuCP()}',
            coliniaCliente='{$this->getInpuColonia()}',
            idMuncipioCliente='{$this->getInpuMunicipio()}',
            nombreRecomiendaCliente='{$this->getInpuNombreRecomienda()}',
            motivoCliente='{$this->getInpuMotivo()}',
            telefonoEmergencia='{$this->getInpuTelEmergencia()}',
            parentescoEmergenciaCliente='{$this->getInpuParentesco()}',
            medicamentoAnteriorCliente='{$this->getInputNombreMedicamento()}',
            envioCliente='1'
        WHERE idCliente='{$this->getIdPaciente()}'";
        // var_dump($query);
        // die();
         $Update = $this->db->query($query);
         $upConMeso = false;
         if($Update){
             $upConMeso = true;
         }
         return $upConMeso;
    }

    public function updateEnfermedadesModels(){
        // eliminamos los lo registros 
        $eliminar = new ModeloBase();
        $del = $eliminar->deleteTable($this->getTabla(),$this->getdeleteIdEnfermedad(),$this->getIdPaciente());
         $eliminar = false;
         if($del){
            $result = false;
            foreach($this->getSelect() as $valor){
                $insertEnfermedad = "INSERT INTO {$this->getTabla()}
                VALUES (null,'{$this->getIdPaciente()}', '{$valor[0]}', '{$valor[2]}', '{$valor[1]}')";
                $guardar = $this->db->query($insertEnfermedad);
    
                if($guardar){
                    $result = true;
                }
    
            }
            return $result;
         }else{
             return $eliminar;
         }
    }

    public function updateCirugia(){

        // eliminamos los lo registros 
       // $delete = "DELETE FROM {$this->getTabla()} WHERE {$this->getdeleteIdEnfermedad()}='{$this->getidPaciente()}'";
        $eliminar = new ModeloBase();
        $del = $eliminar->deleteTable($this->getTabla(),$this->getdeleteIdEnfermedad(),$this->getIdPaciente());
         $eliminar = false;
         if($del){
            $result = false;
            foreach($this->getCirugia() as $valor){
                $cirugia = "INSERT INTO {$this->getTabla()}
                VALUES (null,'{$this->getIdPaciente()}', '{$valor[0]}', '{$valor[1]}')";
                $guardar = $this->db->query($cirugia);
   
              
                if($guardar){
                    $result = true;
                }
            }
            return $result;
         }else{
             return $eliminar;
         }
    }

    public function updateMujer(){        
        $women = "UPDATE datosmujer
                    SET		
                        numEmbarazosDatoMujer='{$this->getEmbarazo()}',
                        naciTerminoEmbarazoDatoMujer='{$this->getTerminoEmbarazo()}',
                        abortoDatoMujer='{$this->getAborto()}',
                        fechaUltimoEmbarazoDatoMujer='{$this->getFechaUltmoEmbarazo()}',
                        ultimaPeriodoDatoMujer='{$this->getPeriodo()}',
                        anticonceptivoDatoMujer='{$this->getAnticonceptivo()}'
                    WHERE idclienteDatoMujer='{$this->getIdPaciente()}'";
        $UpdateTratameinto = $this->db->query($women);
        $upConMeso = false;
        if($UpdateTratameinto){
            $upConMeso = true;
        }
        return $upConMeso;
    }

    public function updateTratamiento(){
        $update = "UPDATE tratameintoactual
                    SET
                        nombreMedicamento='{$this->getMedicamento()}'
                    WHERE idClientesConotrol='{$this->getIdPaciente()}'";
    $UpdateTratameinto = $this->db->query($update);
         $upConMeso = false;
         if($UpdateTratameinto){
             $upConMeso = true;
         }
         return $upConMeso;
    }

}