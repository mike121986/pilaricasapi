<?php
require_once 'db.php';
class ModeloBase{
    public $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll($tabla){
    	$consulta = "SELECT * FROM $tabla";
        $query = $this->db->query($consulta);
        return $query;
    }
    public function getAllWhere($tabla,$where){
        $consulta = "SELECT * FROM $tabla $where";
        $query = $this->db->query($consulta);
        return $query;
    }
    public function getIdCleinte($id,$tabla,$idConsultorio){
        // $getId = "SELECT IFNULL(MAX($id),0)+1 as id FROM $tabla";
         $getId = "SELECT IFNULL(MAX($id),0)+1 as id FROM $tabla
        WHERE id_consultorio = $idConsultorio";
        
         $id = $this->db->query($getId);
         return $id;
    }

    public function getAllStatus($consultorio,$status){
        $getAll="SELECT * FROM listado_pacientes
                 WHERE statusCliente = $status
                 AND id_consultorio = $consultorio";
        $nuevo = $this->db->query($getAll);
        return $nuevo;
    }

    public function getEmailExis($email){
        $validar = "SELECT us.correoUsuario, us.tipoUsuario FROM usuario us WHERE us.correoUsuario = '$email'";
        $query = $this->db->query($validar);

        return $query;
    }

    public function deleteTable($tabla,$where,$idUser){
        $validar = "DELETE FROM $tabla WHERE $where='$idUser'";
        $query = $this->db->query($validar);

        return $query;
    }



    public function getMenUsuario($getIdUsuario){
        $menu = "SELECT * FROM menuUsuarioDoctor WHERE idUsuario = $getIdUsuario";
        $getMEnu = $this->db->query($menu);
        // //var_dump($menu);

      $menu = array();
      while($arrayMenu = $getMEnu->fetch_object()){
        $menu[]= array( 
                        array($arrayMenu->idMenu,$arrayMenu->nombreSubmenu,$arrayMenu->urlSubmenu,$arrayMenu->iconoMEnu)
                    );
      }
    //   $suMEnu =  json_encode($menu);

return json_encode($menu);
      
      
        
    }

}