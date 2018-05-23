<?php
session_start();
include '../php/conexion_db.php';

if(isset($_GET["l"]) && $_GET["l"] == "aspirante"){
	login_aspirantes();
}elseif (isset($_GET["l"]) && $_GET["l"] == "empresa") {
	login_empresas();
}

function login_aspirantes(){
	$C = new Conexion();
	$link = $C->conectar();
	$input = mysqli_real_escape_string($link,$_POST['inputCorreo']);
	$sql = "SELECT *,TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) AS edad FROM aspirantes WHERE correo='".$input."' OR cedula='".$input."';";
	$resultado = mysqli_query($link,$sql);
	$filas = mysqli_num_rows($resultado);
	if ($filas>0) {
		while ($row=mysqli_fetch_assoc($resultado)){
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
			$_SESSION["perfil_laboral"] = utf8_encode($row["perfil_laboral"]);}

			if(password_verify($_POST["inputContrasenia"],$_SESSION["hash_contrasenia"])){

				if ($handle = opendir("../store/aspirantes/".$_SESSION['cedula'])) {
					$file = mysqli_real_escape_string($link,$_SESSION['cedula']);

					if (file_exists("../store/aspirantes/".$_SESSION['cedula']."/img/".$file.".png")) {
						$_SESSION["img"] = "../store/aspirantes/".$_SESSION['cedula']."/img/img/".$file.".png";
						$_SESSION["gr"] = "../store/aspirantes/".$_SESSION['cedula']."/img/500_".$file.".png";
						$_SESSION["md"] = "../store/aspirantes/".$_SESSION['cedula']."/img/300_".$file.".png";
						$_SESSION["avatar"] = "../store/aspirantes/".$_SESSION['cedula']."/img/128_".$file.".png";
					} else{	
						$_SESSION["img"] = "../store/default/aspirantess.png";
						$_SESSION["gr"] = "../store/default/aspirantes.png";
						$_SESSION["md"] = "../store/default/aspirantes.png";
						$_SESSION["avatar"] = "../store/default/aspirantes.png";
					}

				}
				closedir($handle); 

				header('HTTP/1.1 200 Ok');
				$_SESSION["loggedin"]= true;
			// echo "Bienvenido ".$_SESSION["nombres"]." ".$_SESSION["apellidos"];
			}else{
				header('HTTP/1.1 500 Las credenciales no son correctas');}
			}
			else{
				header('HTTP/1.1 500 Correo y/o Contraseña erronea');
			}
			mysqli_free_result($resultado);
			mysqli_close($link);
		}

		function login_empresas(){
			$C = new Conexion();
			$link = $C->conectar();
			$correo = mysqli_real_escape_string($link,$_POST['inputCorreo']);
			$sql = "SELECT * FROM empresas WHERE correo='".$correo."';";
			$resultado = mysqli_query($link,$sql);
			$filas = mysqli_num_rows($resultado);

			if ($filas>0) {
				while ($row=mysqli_fetch_assoc($resultado)){

					// $sector_empresa = mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM sector_empresarial WHERE id_sector=".$row["id_sector"].";")); 

					$_SESSION["nombre"]=$row["nombre"];
					$_SESSION["sector"]=$sector_empresa['nombre_sector'];
					$_SESSION["nit"]=$row["nit"];
					$_SESSION["correo"]=$row["correo"];
					$_SESSION["telefono"]=$row["telefono"];
					$_SESSION["direccion"]=$row["direccion"];
					$_SESSION["hash_contrasenia"]=$row["hash_contrasena"];
					$_SESSION["estado"]=$row["estado"];
					$_SESSION["id_empresa"]=$row['id'];
					$_SESSION["descripcion"]=  $row["descripcion"];
				}
			}

				if(password_verify($_POST["inputContrasenia"],$_SESSION["hash_contrasenia"])){

					if ($handle = opendir("../store/empresas/".$_SESSION['nit'])) {
						$file = mysqli_real_escape_string($link,$_SESSION["nit"]);

						if (file_exists("../store/empresas/".$_SESSION['nit']."/img/".$file.".png")) {
							$_SESSION["img"] = "../store/empresas/".$_SESSION['nit']."/img/img/".$file.".png";
							$_SESSION["gr"] = "../store/empresas/".$_SESSION['nit']."/img/500_".$file.".png";
							$_SESSION["md"] = "../store/empresas/".$_SESSION['nit']."/img/300_".$file.".png";
							$_SESSION["avatar"] = "../store/empresas/".$_SESSION['nit']."/img/128_".$file.".png";
						} else{	
							$_SESSION["img"] = "../store/default/empresas.png";
							$_SESSION["gr"] = "../store/default/empresas.png";
							$_SESSION["md"] = "../store/default/empresas.png";
							$_SESSION["avatar"] = "../store/default/empresas.png";
						}
					}
					closedir($handle); 

					header('HTTP/1.1 200 Ok');
					echo "Bienvenido ".$_SESSION["nombre"];
					$_SESSION["loggedin"] = true;
				}else{
					header('HTTP/1.1 500 Las credenciales no son correctas');
					mysqli_free_result($resultado);
					mysqli_close($link);
				}
			}