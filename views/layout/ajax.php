<?php 
require_once "../../models/pacienteModels.php";
require_once "../../helpers/validacion.php";
require_once "../../helpers/crypt.php";
require_once "../../controllers/LogginController.php";


class Ajax{
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


	public function selectMun(){
		$query = $this->getDato();
		$sent = new LogginController();
		$sent->getMunicipio($query);
	}

	public function verifCorreo(){
		$query = $this->getDato();
		$sent = new LogginController();
		$sent->getCorreoExistent($query);
	}
	
	public function cryptAll(){
		$dato = $this->getDato();
		$datos = json_decode($dato,true);
		$begin = $datos["data"][0];
		$title = $begin["con"];
		$sum = $begin["suma"];
		$subtraction= $begin["resta"];
		
		$sentInfo["tratameinto"] = SED::encryption($title);
		$sentInfo["suma"] = SED::encryption($sum);
		$sentInfo["resta"] = SED::encryption($subtraction);
		
		header('content-type: application/json; charset=utf8');
		echo json_encode($sentInfo);
		
	}
	
	public function verifLogg(){
		$query = $this->getDato();
		$sent = new LogginController();
		$sent->verifEmailLog($query);
	}


}
//     echo "<pre>";
//     var_dump($_POST);
//    echo "</pre>";
//     exit();

if(isset($_POST["idEstado"])){
	$sent = new Ajax();
	$sent -> setDato($_POST["idEstado"]);
	$sent -> selectMun();
}

if(isset($_POST["correo"])){
	$sent = new Ajax();
	$sent -> setDato($_POST["correo"]);
	$sent -> verifCorreo();
}

if(isset($_POST['sentDatos'])){
	$crypt = new Ajax();
	$crypt->setDato($_POST['sentDatos']);
	$crypt->cryptAll();
}

if(isset($_POST["correoLoggin"])){
	$sent = new Ajax();
	$sent -> setDato($_POST["correoLoggin"]);
	$sent -> verifLogg();
}
