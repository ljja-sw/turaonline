<?php
include '../php/conexion_db.php';

function registro_oferta(){
	$C = new Conexion();
	$link = $C->conectar();

	$titulo     	= mysqli_real_escape_string($link,$_POST['inlineFormInputMD']);
	$descripcion 	= mysqli_real_escape_string($link,$_POST['textareaPrefix']);
	$vencimiento 	= mysqli_real_escape_string($link,$_POST['fecha_vencimiento']);

	$sql = "INSERT INTO ofertas (`id_empresa`, `titulo`, `descripcion`, `tipo`, `fecha_vencimiento`) VALUES(".$idEmpresa.",'".$titulo."','".$descripcion."','".$tipo."', '".$vencimiento."');";

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