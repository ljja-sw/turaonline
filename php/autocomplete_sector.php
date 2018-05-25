<?php 
session_start();
include 'conexion_db.php';

$input_sector = $_POST['sector'];

$C = new Conexion();
$link = $C->conectar();

$consulta = "SELECT * FROM sector_empresarial WHERE nombre LIKE '%$input_sector%' OR nombre='%$input_sector%';";

$resultado = mysqli_query($link,$consulta);

$sector = array();

if(mysqli_num_rows($resultado) > 0){
    while($row = mysqli_fetch_assoc($resultado)){
        $sector[] = ['sector' => $row['nombre']];
    }
	header('HTTP/1.1 200 Ok');
    // header( cv v 'Content-Type: application/json');
	echo json_encode($sector,JSON_UNESCAPED_UNICODE);
}