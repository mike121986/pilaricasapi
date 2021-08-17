<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/modeloBase.php';
require_once 'config/parameters.php';
require_once 'helpers/utls.php';
require_once 'helpers/validacion.php';
require_once 'helpers/crypt.php';

function show_error(){
    $error = new ErrorController();
    $error->index();
}

if(isset($_GET['controller'])){
    $nombreControlador = $_GET['controller'].'Controller';
    require_once 'views/layout/header.php'; 
    require_once 'views/layout/sidebar.php';
}elseif(!isset($_GET['controller'])  && !isset($_GET['action'])){
    $nombreControlador = controller_default;    
}else{
    show_error();
    exit();
}
// comprobar sis existe un controlador
if(class_exists($nombreControlador)){    
    
    $controlador = new $nombreControlador();
    
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }elseif(!isset($_GET['controller'])  && !isset($_GET['action'])){
        $action_default = action_default;
        $controlador->$action_default();
    }else{
        show_error();
    }
}else{
    show_error();
}
require_once 'views/layout/footer.php';
