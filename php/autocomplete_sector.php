<?php 
include 'conexion_db.php';

//$sector = $_POST['input'];
$sector = "";

$C = new Conexion();
$link = $C->conectar();

$consulta = "SELECT * FROM sector_empresarial WHERE nombre_sector LIKE '%$sector%' OR nombre_sector='%$sector%';";
 
$resultado = mysqli_query($link,$consulta);

$sector = array();

if(mysqli_num_rows($resultado) > 0){
    while($row = mysqli_fetch_assoc($resultado)){
        $sector[] = $row['nombre_sector'];

    }
		header('HTTP/1.1 200 Ok');
		echo json_encode($sector,JSON_UNESCAPED_UNICODE);
}