<?php
session_start();
require_once "../../models/pacienteModels.php";
require_once "../../helpers/validacion.php";
require_once "../../helpers/crypt.php";
require_once "../../controllers/LogginController.php";


class Ajax
{
	public $arraySent;
	public $arrayLinea;
	private $dato;
	public $producto;

	public function getDato()
	{
		return $this->dato;
	}

	public function setDato($archivo)
	{
		$this->dato = $archivo;
		return $this;
	}


	public function selectMun()
	{
		$query = $this->getDato();
		$sent = new LogginController();
		$sent->getMunicipio($query);
	}

	public function verifCorreo()
	{
		$query = $this->getDato();
		$sent = new LogginController();
		$sent->getCorreoExistent($query);
	}

	public function verifLogg()
	{
		$query = $this->getDato();
		$sent = new LogginController();
		$sent->verifEmailLog($query);
	}

	// creamo session para agregar al contacto solo se permiten 3 contactos por cliente
	public function sessionContacto()
	{
		$datos = $this->getDato();
		$decode = json_decode($datos, true);


		if (isset($_SESSION["contacto"])) {
			$contar = count($_SESSION["contacto"]["nombreContacto"]);
			$regreso = $contar + 1;
			echo $regreso;
			if ($contar < 3) {
				array_push($_SESSION["contacto"]["nombreContacto"], $decode["data"][0]["nombre_nameContactoCustomer_30"]);
				array_push($_SESSION["contacto"]["telefonoContacto"], $decode["data"][0]["phone_telPrCustomer_12"]);
				array_push($_SESSION["contacto"]["telefonoSec"], $decode["data"][0]["email_emailContactoCustomer_100"]);
				array_push($_SESSION["contacto"]["correo"], $decode["data"][0]["phone_telSecCustomer_12"]);
			}
		} else {
			echo 1;
			$_SESSION["contacto"] = array(
				"nombreContacto" => array($decode["data"][0]["nombre_nameContactoCustomer_30"]),
				"telefonoContacto" => array($decode["data"][0]["phone_telPrCustomer_12"]),
				"telefonoSec" => array($decode["data"][0]["email_emailContactoCustomer_100"]),
				"correo" => array($decode["data"][0]["phone_telSecCustomer_12"])
			);
		}
	}
}
/*     echo "<pre>";
    var_dump($_POST);
   echo "</pre>";
    exit(); */

if (isset($_POST["idEstado"])) {
	$sent = new Ajax();
	$sent->setDato($_POST["idEstado"]);
	$sent->selectMun();
}

if (isset($_POST["correo"])) {
	$sent = new Ajax();
	$sent->setDato($_POST["correo"]);
	$sent->verifCorreo();
}

if (isset($_POST["correoLoggin"])) {
	$sent = new Ajax();
	$sent->setDato($_POST["correoLoggin"]);
	$sent->verifLogg();
}

if (isset($_POST["contacto"])) {
	$contact = new Ajax();
	$contact->setDato($_POST["contacto"]);
	$contact->sessionContacto();
}
