<?php

class ErrorController{
    public function __construct()
    {
        /* validamos si extiste a sesison */
        if(!isset($_SESSION['usuario'])){Utls::sinSession();}
    }
    /*este es una clase de prueba para saber que todo esta bien relacionado */
    public function index(){
        require_once 'views/error/error404.php';
    }

    public function update(){
        require_once 'views/error/errorUpdate.php';
    }
}
