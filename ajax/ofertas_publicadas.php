<?php
		require_once '../php/conexion_db.php';

		$BD = new Conexion();
		$link = $BD->conectar();

$query = "SELECT titulo,tipo,fecha_publicacion,estado_oferta,empresas.nombre,empresas.nit,ofertas.descripcion FROM ofertas INNER JOIN empresas ON ofertas.id_empresa = empresas.id;";

$resultado = mysqli_query($link, $query);
clearstatcache();
if (mysqli_num_rows($resultado)>0) {
	while ($fila = mysqli_fetch_assoc($resultado)) {?>

		<div class="row">
        	<h5 class="col-md-6">
        		<strong>
              		<?php echo $fila['titulo']; ?>
        		</strong>
        	</h5>
        	<a class="col-md-2" href="#">Editar</a>
        	<a class="col-md-2" href="#">Eliminar</a>
          	<a class="col-md-2" data-toggle="modal" data-target="#publicarOferta">Ver</a>
        </div>

<?php }
}else{?>
	<div class="text-center my-5">
		<h1><i class="fi-x"></i></h1>
		<h1 class="display-4">No hay Ofertas publicadas para mostrar</h1>
		<strong><p>Publica una oferta</p></strong>
	</div>
<?php } ?>