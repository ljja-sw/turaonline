<?php
include 'login.php';
include '../php/conexion_db.php';
if(isset($_GET["r"]) && $_GET["r"] == "oferta"){
	registro_oferta();
}

function registro_oferta(){
	$C = new Conexion();
	$link = $C->conectar();

	$idEmpresa = $_SESSION["id_empresa"];
	$titulo     	= mysqli_real_escape_string($link,$_POST['nom_oferta']);
	$descripcion 	= mysqli_real_escape_string($link,$_POST['descripcion']);
	$estudios       = mysqli_real_escape_string($link,$_POST['estudios']);
	$experiencia    = mysqli_real_escape_string($link,$_POST['experiencia']);
	$salario		= mysqli_real_escape_string($link,$_POST['salario']);
	$jornadaLaboral = mysqli_real_escape_string($link,$_POST['tjornada']);
	$tipoContrato   = mysqli_real_escape_string($link,$_POST['tcontrato']);
	$urgente_normal = mysqli_real_escape_string($link,$_POST['decaracter']);
	$estado_oferta	= "Activo";

	$sql = "INSERT INTO ofertas (`id_empresa`, `titulo`, `descripcion`, `estudios`, `experiencia`, `salario`, `jornadaLaboral`, `tipoContrato`, `urgente_normal` `estado_oferta`) VALUES(".$idEmpresa.",'".$titulo."','".$descripcion."','".$estudios."', '".$experiencia."', '".$salario."', '".$jornadaLaboral."', '".$tipoContrato."', '".$urgente_normal."', '".$estado_oferta."');";

	$resultado = mysqli_query($link,$sql);

	if(!$resultado){
		$errorno =  mysqli_errno($link);
		switch ($errorno) {
			case '1062':
			header('HTTP/1.1 500 Ya existe una oferta con esos datos');
			break;
			default:
			header('HTTP/1.1 500 Hubo un error');
			break;
		}
	}else{
		echo "Registro Completo $titulo";
	}
	mysqli_close($link);
}