<?php 
	include '../php/conexion_db.php';
	
	$link = $C->conectar();

	$sql = "SELECT titulo, descripcion FROM ofertas";

	$resultado = mysqli_query($link,$sql);

	$filas = mysqli_num_rows($resultado);

	if ($filas>0) {
		while ($row=mysqli_fetch_assoc($resultado)){
			$data["data"][] = $row;
		}
		echo json_encode($data);
	}else{
		echo "Error";
	}

/*

			$_SESSION["nombres"]=$row["nombre"];
			$_SESSION["apellidos"]=$row["apellido"];
			$_SESSION["sexo"]=$row["sexo"];
			$_SESSION["correo"]=$row["correo"];
			$_SESSION["telefono"]=$row["telefono"];
			$_SESSION["direccion"]=$row["direccion"];
			$_SESSION["hash_contrasenia"]=$row["hash_contrasenia"];
			$_SESSION["edad"]=$row["edad"];
			$_SESSION["cedula"]=$row["cedula"];
			$_SESSION["id_usuario"]=$row["id_usuario"];
			$_SESSION["perfil_laboral"] = utf8_encode($row["perfil_laboral"]);

 */






?>