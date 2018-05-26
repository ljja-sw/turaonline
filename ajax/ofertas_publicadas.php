<?php

		include_once '../php/conexion_db.php';

		$BD = new Conexion();
		$link = $BD->conectar();


$query = "SELECT DISTINCT titulo FROM ofertas INNER JOIN empresas ON ofertas.id_empresa =".$_SESSION['id_empresa'].";";

$resultado = mysqli_query($link, $query);
clearstatcache();
if (mysqli_num_rows($resultado)>0) {
	while ($fila = mysqli_fetch_assoc($resultado)) {
		$_SESSION["titulo"] = $fila['titulo'];
	?>
		

		<div class="row">
        	<h5 class="col-md-6">
        		<strong>
              		<?php echo $_SESSION["titulo"]; ?>
        		</strong>
        	</h5>
        </div>

<?php }
}else{?>
	<div class="text-center my-5">
		<h1><i class="fi-x"></i></h1>
		<h1 class="display-4">No hay Ofertas publicadas para mostrar</h1>
		<strong><p>Publica una oferta</p></strong>
	</div>
<?php } ?>