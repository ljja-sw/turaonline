<?php session_start();
include_once 'conexion_db.php';


$BD = new Conexion();
$link = $BD->conectar();

$id_oferta = $_POST['id_oferta'];
$id_aspirante = $_SESSION['id_usuario'];

	
$limite = ($ofertas = mysqli_fetch_assoc(mysqli_query($link,"SELECT COUNT(*) as ofertas_aspirante FROM aspirante_oferta WHERE id_aspirante = $id_aspirante AND id_oferta = $id_oferta"))) ? $ofertas['ofertas_aspirante'] : $ofertas['ofertas_aspirante'] ;


if ($limite == 0) {
	if (mysqli_query($link,"INSERT INTO aspirante_oferta (id_aspirante,id_oferta) VALUES($id_aspirante,$id_oferta)")) {
		echo "Te has Enlistado en esta oferta";
		header('HTTP/1.1 200 Ok');
	}
}else{ 	header('HTTP/1.1 500 Ya estas elistado(a) en esta Oferta');}
