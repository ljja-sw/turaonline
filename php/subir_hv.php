<?php 
session_start();
require_once 'conexion_db.php';
	$C = new Conexion();
	$link = $C->conectar();
	
    $nombre = $_FILES['hv']['name'];
    $tamaño = $_FILES['hv']['size'];

    $directorio = "../store/aspirantes/".$_SESSION['cedula']."/docs/".$_SESSION['cedula']."_hv.pdf";
	$ext = pathinfo($_FILES['hv']['name'], PATHINFO_EXTENSION);

    $sql = "INSERT INTO hv_aspirantes (id_aspirante,nombre,directorio,tamaño) VALUES ('".$_SESSION['id_usuario']."', '".$nombre."','".$directorio."', '".$tamaño."');";

    if ($ext == "pdf"|| $ext == "PDF") {

    	if (move_uploaded_file($_FILES['hv']['tmp_name'],$directorio)) {
    		mysqli_query($link,$sql);
    		echo "Hoja de Vida cargada";
    	} else {
    		   header('HTTP/1.1 500 Hubo un error intentalo de nuevo');
    	}
    	
    } else {
    	header('HTTP/1.1 500 Solo se permiten arhcivos .pdf');
    }
    

    ;