<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control">
<?php
if (isset($_GET['b'])) {
	$busqueda = $_GET['b'];
} else {
	$busqueda = "";
}

$titulo = "Buscando: ".$busqueda;
require "head.php";
require 'php/Funciones.php';
$funciones = new Funciones();
?>
<body>
	<?php require 'navbar.php';  ?>
	<section class="container my-3">
		<div class="row">
			<div class="col-md-3 ">
				<blockquote class="blockquote bq-pagina">
					<h3 class="bq-title">
						<i class="fa fa-search-plus">
						</i>
						<strong>
							Resultados de:
						</strong>
					</h3>
					<h2 class="text-right bq-text">
						<?php echo $busqueda; ?>
					</h2>
				</blockquote>
				<blockquote class="blockquote bq-pagina">
					<ul class="nav flex-column">
						<li class="nav-item active">
							<a class="nav-link" data-toggle="tab" href="#empresas" rol="tab">
								Empresas
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#sectores" rol="tab">
								Sectores
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#ofertas" rol="tab">
								Ofertas de trabajo
							</a>
						</li>
					</ul>
				</blockquote>
			</div>
			<div class="col-md-8">
				<div class="tab-content container">
					<div class="tab-pane fade in show active" id="empresas" role="tabpanel">
						<div class="row">
							<h1>
								Empresas
							</h1>
						</div>
						<div class="row">
							<?php
							$query = "SELECT * FROM empresas WHERE nombre LIKE '%$busqueda%';";
							$resultado = $funciones->
							ejecutarQuery($query);

							if (mysqli_num_rows($resultado) >= 1) {
								while($fila = mysqli_fetch_assoc($resultado)) {
									$img = "store/empresas/".$fila['nit']."/img/"."300_".$fila["nit"].".png"; ?>
									<div class="card card-body col-md-12 mx-1">
										<div class="row align-items-center">
											<div class="col-md-3 justify-content-center">
												<div class="card-logo">
													<img src="<?php echo $img ?>">
												</div>
											</div>
											<div class="col-md-9">
												<h3 class="mt-0 h3-responsive">
													<?php echo $fila["nombre"]; ?>
												</h3>
												<p class="h6 text-muted">
													<?php echo $fila["direccion"];?>
												</p>
												<p class="h6 text-muted">
													<?php echo $fila["descripcion"];?>
												</p>
											</div>
										</div>
										<div class="col-md-2 align-self-end">
											<a class="float-right" href="empresas/info.php?id=<?php echo $fila['nit'] ?>">Info <i class="fa fa-arrow-right"></i> </a>
										</div>
									</div>
									<?php }}else{ ?>
									<div class="card card-body col-md-4 mx-2">
										<h4 class="card-title">
											No hay resultados
										</h4>
									</div>
									<?php } ?>
								</div>
							</div>
							<div class="tab-pane fade" id="sectores" role="tabpanel">
								<div class="row">
									<h1>
										Sectores
									</h1>
								</div>
								<div class="row">
									<?php
									$query = "SELECT * FROM sector_empresarial WHERE nombre LIKE '%$busqueda%';";
									$resultado = $funciones->
									ejecutarQuery($query);
									if (mysqli_num_rows($resultado) >= 1) {
										while($fila = mysqli_fetch_assoc($resultado)) { ?>
										<div class="card card-body col-md-4 mx-2">
											<h4 class="card-title">
												<?php echo $fila['nombre']; ?>
											</h4>
											<div class="flex-row">
												<a class="card-link float-right" href="#<?php echo $fila['id_sector'] ?>">
													Ver Empresas
												</a>
											</div>
										</div>
										<?php }}else{ ?>
										<div class="card card-body col-md-4 mx-2">
											<h4 class="card-title">
												No hay resultados
											</h4>
										</div>
										<?php } ?>
									</div>
								</div>
								<div class="tab-pane fade" id="ofertas" role="tabpanel">
									<div class="row">
										<h1>
											Ofertas
										</h1>
									</div>
									<div class="row">
										<?php
										$query = "SELECT titulo,empresas.nombre,empresas.nit,ofertas.descripcion
										FROM ofertas INNER JOIN empresas ON empresas.id = ofertas.id_empresa WHERE titulo LIKE '%$busqueda%' OR ofertas.descripcion LIKE '%$busqueda%' OR empresas.nombre LIKE '%$busqueda%'; ";
										$resultado = $funciones->
										ejecutarQuery($query);
										if (mysqli_num_rows($resultado) >= 1) {
											while($fila = mysqli_fetch_assoc($resultado)) { ?>
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
													<p><?php echo $fila['descripcion'] ?></p>
												</div>
												<div class="row mx-1 align-items-center">
													<div class="col-md-8">
														<small>hace 1 hora(s)</small>
													</div>
													<div class="col">
														<a href="#" class="btn btn-outline-pagina">Ver Oferta</a>
													</div>
												</div>
											</div>
											<?php }}else{ ?>
											<div class="card card-body col-md-4 mx-2">
												<h4 class="card-title">
													No hay resultados
												</h4>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<?php require 'footer.php'; ?>
				</body>
			</meta>
		</meta>
		</html>
