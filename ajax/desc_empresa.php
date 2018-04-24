<?php
if (session_status() != PHP_SESSION_ACTIVE) {
	session_start();}
include '../php/conexion_db.php';
$C = new Conexion();
$link = $C->conectar(); ?>

<?php if (isset($_GET["d"]) && ($_GET["d"] == "editar")){ 
$nueva_descripcion = mysqli_real_escape_string($link,utf8_encode($_POST['ds']));
$sql = "UPDATE empresas SET descripcion ='".$nueva_descripcion."' WHERE nit=".$_SESSION["nit"].";";

$resultado = mysqli_query($link,$sql);
if(!$resultado){

	echo "Hubo un error en la peticion"; 
  }else{
 	$_SESSION["descripcion"] = $nueva_descripcion;
	echo "Descripcion actualizada"; }
mysqli_close($link);
}else{?>
<!-- Descripcion cargado al iniciar la sesión es cargado por defecto-->
<p id="descripcion"><?php echo utf8_decode($_SESSION["descripcion"]); ?></p> 
<?php } ?>
