<?php
include '../php/conexion_db.php';

if(isset($_GET["r"]) && $_GET["r"] == "aspirante"){
	registro_aspirantes();
}elseif (isset($_GET["r"]) && $_GET["r"] == "empresa") {
	registro_empresas();
}

function registro_aspirantes(){
	$C = new Conexion();
	$link = $C->conectar();

	$nombre       		= mysqli_real_escape_string($link,$_POST['nombre_d']);
	$apellido     		= mysqli_real_escape_string($link,$_POST['apellido_d']);
	$correo       		= mysqli_real_escape_string($link,$_POST['correo_d']);
	$numero_tel   		= mysqli_real_escape_string($link,$_POST['numero_tel_d']);
	$cedula       		= mysqli_real_escape_string($link,$_POST['cedula_d']);
	$direccion    		= mysqli_real_escape_string($link,$_POST['direccion_d']);
	$sexo   			= mysqli_real_escape_string($link,$_POST['sexo']);
	$fecha_nacimiento   = mysqli_real_escape_string($link,$_POST['fecha_nacimiento_d']);
	$contrasena   		= password_hash( $_POST['contrasenia_d'], PASSWORD_BCRYPT, array('cost' => 11));
	$directorio_personal = "../store/aspirantes/".$cedula;

	$sql = "INSERT INTO aspirantes (`cedula`, `nombre`, `apellido`, `sexo`, `correo`, `hash_contrasenia`, `fecha_nacimiento`, `direccion`, `telefono`,`perfil_laboral`) VALUES(".$cedula.",'".$nombre."','".$apellido."','".$sexo."','".$correo."','".$contrasena."','".$fecha_nacimiento."','".$direccion."','".$numero_tel."','¿Para que eres bueno?,¿Tienes alguna especializacion?');";

	$resultado = mysqli_query($link,$sql);

	if(!$resultado){
		$errorno =  mysqli_errno($link);
		switch ($errorno) {
			case '1062':
			header('HTTP/1.1 500 Ya existe un usuario registrado con esos datos');
			break;
			default:
			header('HTTP/1.1 500 Hubo un error');
			break;
		}
	}else{
		header('HTTP/1.1 200');
		mkdir($directorio_personal, 0777, true);
		mkdir($directorio_personal."/img", 0777, true);
		mkdir($directorio_personal."/docs", 0777, true);
		copy("../store/default/aspirantes.png",$directorio_personal."/img/".$cedula.".png");
		$tamaños = array('500_'=> 500,'300_' => 300,'128_' => 128 );
		foreach ($tamaños as $key => $value) {
			copy("../store/default/aspirantes.png",$directorio_personal."/img/".$key.$cedula.".png");
		}
		echo "Registro Completo $nombre $apellido";
	}
	mysqli_close($link);
}

function registro_empresas(){
	$C = new Conexion();
	$link = $C->conectar();
	
	$sector_input   = mysqli_real_escape_string($link,$_POST['sector']);
	$query_sector = "SELECT id FROM sector_empresarial where nombre='".$sector_input."'";
	$resultado_sector = mysqli_query($link,$query_sector);

	if (mysqli_num_rows($resultado_sector)>0) {
		$array_sector = mysqli_fetch_assoc($resultado_sector);
		$sector = $array_sector['id'];
	} else {
		$query_sector = "INSERT INTO sector_empresarial VALUES (NULL,'".$sector_input."');";
		$resultado_sector = mysqli_query($link,$query_sector);
		$sector = mysqli_insert_id($link);
	}

	$nombre       	= mysqli_real_escape_string($link,$_POST['nombre']);
	$correo       	= mysqli_real_escape_string($link,$_POST['correo']);
	$numero_tel   	= mysqli_real_escape_string($link,$_POST['telefono']);
	$nit       		= mysqli_real_escape_string($link,$_POST['nit']);
	$direccion    	= mysqli_real_escape_string($link,$_POST['direccion']);
	$contrasena   	= password_hash( $_POST['contrasena'], PASSWORD_BCRYPT, array('cost' => 11));
	$directorio_personal = "../store/empresas/".$nit;

	$sql = "INSERT INTO empresas (`nombre`,`id_sector`,`correo`,`hash_contrasena`,`nit`,`direccion`,`telefono`,`estado`,`descripcion`) VALUES('".$nombre."',".$sector.",'".$correo."','".$contrasena."','".$nit."','".$direccion."','".$numero_tel."','En Espera','¿En que se especializa esta empresa?');";

	$resultado = mysqli_query($link,$sql);

	if(!$resultado){
		$errorno =  mysqli_errno($link);
		$error = mysqli_error($link);
		switch ($errorno) {
			case '1062':
			header('HTTP/1.1 500 Ya existe una empresa registrada con estos datos');
			break;
			default:
			header('HTTP/1.1 Hubo un error');
			break;
		}
	}else{
		mkdir($directorio_personal, 0777, true);
		mkdir($directorio_personal."/img", 0777, true);
		mkdir($directorio_personal."/docs", 0777, true);

		copy("../store/default/empresas.png",$directorio_personal."/img/".$nit.".png");
		$tamaños = array('500_'=> 500,'300_' => 300,'128_' => 128 );
		foreach ($tamaños as $key => $value) {
			copy("../store/default/empresas.png",$directorio_personal."/img/".$key.$nit.".png");
		}
		echo "Empresa Registrada";

	}
	mysqli_close($link);
}
