<?php 
	require_once 'Funciones.php';
	$f = new Funciones();
	$oferta= $_POST['id_oferta'];
	$aspirante = $_POST['id_aspirante'];

	if ($f->ejecutarQuery("UPDATE aspirante_oferta SET estado_aspirante = 'En Espera' WHERE id_aspirante = $aspirante AND id_oferta=$oferta")) {
	  echo "Revisa la lista de Espera para esta Oferta";
	}

