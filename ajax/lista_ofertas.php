<?php 
  include 'php/Funciones.php';
  $f = new Funciones();

$query = "SELECT * FROM ofertas INNER JOIN empresas ON ofertas.id_empresa = empresas.id";

$resultado = $f->ejecutarQuery($query);
clearstatcache();

while ($fila = mysqli_fetch_assoc($resultado)) {
	echo $fila['titulo']."\r\n";
}