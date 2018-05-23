<?php
session_start();
include_once '../php/conexion_db.php';

	$C = new Conexion();
	$link = $C->conectar();

	$idEmpresa   =    $_SESSION["id_empresa"];
	$titulo     	= mysqli_real_escape_string($link,$_POST['nom_oferta']);
	$descripcion 	= mysqli_real_escape_string($link,$_POST['descripcion']);
	$estudios       = mysqli_real_escape_string($link,$_POST['estudios']);
	$experiencia    = mysqli_real_escape_string($link,$_POST['experiencia']);
	$salario		= mysqli_real_escape_string($link,$_POST['salario']);
	$jornadaLaboral = mysqli_real_escape_string($link,$_POST['tjornada']);
	$tipoContrato   = mysqli_real_escape_string($link,$_POST['tcontrato']);
	$tipo = mysqli_real_escape_string($link,$_POST['decaracter']);
	$estado_oferta	= "Activo";

	$sql = "INSERT INTO ofertas (`id_empresa`, `titulo`, `descripcion`, `estudios`, `experiencia`, `salario`, `jornadaLaboral`, `tipoContrato`,`tipo`,`estado_oferta`) VALUES ('".$idEmpresa."','".$titulo."','".$descripcion."','".$estudios."', '".$experiencia."', ".$salario.", '".$jornadaLaboral."', '".$tipoContrato."', '".$tipo."', '".$estado_oferta."');";

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
		header('HTTP/1.1 200 Oferta Publicada');
	}
	mysqli_close($link);