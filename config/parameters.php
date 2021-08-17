<?php
define("base_url", "http://poryecto.test/"); // base url para llamadas absolutas de la url 
define("root_Server",$_SERVER['DOCUMENT_ROOT']."/"); // definimos la ruta para que recorra el sistema
define("root_base",$_SERVER['DOCUMENT_ROOT']."/config/modeloBase.php"); //definimos ruta pra ingresar al modelo base
define("controller_default", "LogginController"); // controlador por defecto
define("action_default","index");
/* if(isset($_SESSION['usuario'])){
define("Consultorio",$_SESSION['usuario']['consultorio']);
} */