<?php
/* mandamos a llamara al modelo de clientes */
require_once $_SERVER['DOCUMENT_ROOT'] . "/models/ClienteModel.php";

class ClienteController
{

    /* invocamos a al metodo index */
    public function index()
    {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/models/logginModel.php";
        $estado = new Login();
        $nombreE = $estado->getAll('estados');

        $ruta = new Cliente();
        $rta = $ruta->getAll('ruta');

        require_once 'views/cliente/nuevo.php';
    }

    public function create()
    {
        if (isset($_POST["btnEnviar"])) {
            $nameCustomer = (Validacion::textoLargo($_POST['nameCustomer'] == 900)) ? false : $_POST['nameCustomer'];
            $rfcCustomer = (Validacion::validarRFC($_POST['rfcCustomer'] == false)) ? false : $_POST['rfcCustomer'];
            $streetCustomer = (Validacion::textoLargo($_POST['streetCustomer'] == 900)) ? false : $_POST['streetCustomer'];
            $numeroCustomer = (Validacion::validarNumero($_POST['numeroCustomer'] == -1)) ? false : $_POST['numeroCustomer'];
            $inpuEstado = (Validacion::validarNumero($_POST['inpuEstado'] == -1)) ? false : $_POST['inpuEstado'];
            $inpuMunicipio = (Validacion::validarNumero($_POST['inpuMunicipio'] == -1)) ? false : $_POST['inpuMunicipio'];
            $coloniaCustomer = (Validacion::textoLargo($_POST['coloniaCustomer'] == 900)) ? false : $_POST['coloniaCustomer'];
            $cpCustomer = (Validacion::textoLargo($_POST['cpCustomer'] == 900)) ? false : $_POST['cpCustomer'];
            $RutaCustomer = (Validacion::validarNumero($_POST['RutaCustomer'] == -1)) ? false : $_POST['RutaCustomer'];
            $nameContactoCustomer = (Validacion::textoLargo($_POST['nameContactoCustomer'] == 900)) ? false : $_POST['nameContactoCustomer'];
            $emailContactoCustomer = (Validacion::validarEmail($_POST['emailContactoCustomer'] == 0)) ? false : $_POST['emailContactoCustomer'];
            $telPrCustomer = (Validacion::validarTelefono($_POST['telPrCustomer'] == 0)) ? false : $_POST['telPrCustomer'];
            $telSecCustomer = (Validacion::validarTelefono($_POST['telSecCustomer'] == 0)) ? false : $_POST['telSecCustomer'];

            $arrayName = array('nameCustomer' => $nameCustomer, 'rfcCustomer' => $rfcCustomer, 'streetCustomer' => $streetCustomer, 'numeroCustomer' => $numeroCustomer, 'inpuEstado' => $inpuEstado, 'inpuMunicipio' => $inpuMunicipio, 'coloniaCustomer' => $coloniaCustomer, 'cpCustomer' => $cpCustomer, 'RutaCustomer' => $RutaCustomer, 'nameContactoCustomer' => $nameContactoCustomer, 'emailContactoCustomer' => $emailContactoCustomer, 'telPrCustomer' => $telPrCustomer, 'telSecCustomer' => $telSecCustomer);
        }
    }
}
