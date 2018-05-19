<?php 
  include 'php/Funciones.php';
  $f = new Funciones();

$query = "SELECT titulo,fecha_publicacion,estado_oferta,empresas.nombre,empresas.nit,ofertas.descripcion FROM ofertas INNER JOIN empresas ON ofertas.id_empresa = empresas.id";

$resultado = $f->ejecutarQuery($query);
clearstatcache();
if (mysqli_num_rows($resultado)>0) {
	while ($fila = mysqli_fetch_assoc($resultado)) {?>

		<div class="card card-body col-md-11 container mx-1">
			<div class="row align-items-center">
				<div class="col-md-8 py-3">
					<h5>
						<strong>
							<?php echo $fila['titulo']; ?>
						</strong>
					</h5>por
					<a href="../empresas/info.php?id=<?php echo $fila['nit']?>"><?php echo $fila['nombre']; ?></a>
				</div>
				<div class="col">
					<h6>Evaluacion</h6>
				</div>
			</div>
			<div class="row mx-1">
				<p class="descrip"><?php echo $fila['descripcion'] ?></p>
			</div>
			<div class="row mx-1 align-items-center">
				<div class="col-md-8">
					<small>hace 1 hora(s)</small>
				</div>
				<div class="col">
					<a class="btn btn-outline-pagina" data-toggle="modal" data-target="#mostrar_o">Ver Oferta</a>
				</div>
				<!-- Modal -->
				
			</div>
		</div>

<?php }
}else{?>
	<div class="text-center my-5">
		<h1><i class="fi-x"></i></h1>
		<h1 class="display-4">No hay Ofertas para Mostrar</h1>
		<strong><p>No te preocupes muy pronto estarán disponibles</p></strong>
	</div>
<?php } ?>