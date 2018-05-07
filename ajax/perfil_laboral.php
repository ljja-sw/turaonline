<?php
if (session_status() != PHP_SESSION_ACTIVE) {
	session_start();}

if (isset($_GET["actualizar"])){ 
	include '../php/conexion_db.php';
	$C = new Conexion();
	$link = $C->conectar();

$nuevo_perfil = trim(mysqli_real_escape_string($link, utf8_encode($_POST['pl'])));
$sql = "UPDATE aspirantes SET perfil_laboral ='".$nuevo_perfil."' WHERE id_usuario=".$_SESSION["id_usuario"].";";

$resultado = mysqli_query($link,$sql);
if(!$resultado){
	header('HTTP/1.1 500');
	echo "Hubo un error en la peticion";
}else{
	header('HTTP/1.1 200');
 	$_SESSION["perfil_laboral"] = $nuevo_perfil;
	echo "Perfil laboral actualizado"; }
mysqli_close($link);

}else{?>
<!-- Perfil laboral cargado al iniciar la sesión es cargado por defecto-->
<p id="perfil"><?php echo utf8_decode($_SESSION["perfil_laboral"]); ?></p> 
<?php } ?>
