<?php 
/* mandamos a llamara al modelo de clientes */
     require_once root_Server."models/ClienteModel.php";
     
  /*    require_once $_SERVER['DOCUMENT_ROOT']."/models/ClienteModel.php"; */

class ClienteController{

    /* invocamos a al metodo index */
    public function index(){
        return "desde index";
    }
}