<?php
class Conexion{
  function conectar()
{
	   $conexion = mysqli_connect("localhost:3307", "root", "", "turaonline");
	         // $conexion = mysqli_connect("25.73.169.143:3307", "cliente", "", "turaonline");

	     if (!$conexion) {
		        echo 'Error al conectar a la base de datos';}
	            else{
	            }
	   mysqli_set_charset($conexion, "utf8");
	   return $conexion;
}
}?>
