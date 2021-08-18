<?php 
/* mandamos a llamara al modelo de clientes */
     require_once $_SERVER['DOCUMENT_ROOT']."/models/ClienteModel.php";
     
  /*    require_once $_SERVER['DOCUMENT_ROOT']."/models/ClienteModel.php"; */

class ClienteController{

    /* invocamos a al metodo index */
    public function index(){
        require_once $_SERVER['DOCUMENT_ROOT']."/models/logginModel.php";
        $estado = new Login();
        $nombreE = $estado->getAll('estados'); 

       $ruta = new Cliente();
       $rta = $ruta->getAll('ruta');

        require_once 'views/cliente/nuevo.php';
    }

    public function create(){
        var_dump($_POST);
    }
}