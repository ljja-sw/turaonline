<?php
if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();}

if (isset($_GET["actualizar"])){ 
  include '../php/conexion_db.php';
 	$C = new Conexion();
  	$conexion = $C->conectar();

  	$nueva_direccion = mysqli_real_escape_string($conexion,$_POST['direccion']);
  	$nuevo_telefono = mysqli_real_escape_string($conexion,$_POST['telefono']);
  	$nuevo_correo = mysqli_real_escape_string($conexion,$_POST['correo']);

  	$sql = "UPDATE aspirantes SET ";
  	$coma = " ";
  	foreach ($_POST as $input => $value) {
if($value != $_SESSION[$input]) {
       $sql .= $coma.$input."='". trim($value) . "'";
       $coma = ",";
    }}
    $sql .=" WHERE id_usuario=".$_SESSION["id_usuario"].";";

    $resultado = mysqli_query($conexion, $sql);
    
if (!$resultado) {
	header("HTTP/1.1 500");
	echo "No se pudo actualizar los datos";
}else{
	header("HTTP/1.1 200");
	echo "Datos actualizados correctamente";
  $_SESSION["direccion"] = $nueva_direccion;
  $_SESSION["telefono"] = $nuevo_telefono;
  $_SESSION["correo"] = $nuevo_correo;
}
}else{?>
    <h5 id="direccion"><?php echo $_SESSION["direccion"]; ?></h5>
    <h6 id="telefono"><?php echo $_SESSION["telefono"]; ?></h6>
    <h6 id="correo"><?php echo $_SESSION["correo"]; ?></h6>
<?php } ?>