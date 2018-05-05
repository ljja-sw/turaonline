<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
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

	<section class="container-fluid my-3">
		<div class="row">

			<div class="col-md-3 ">

				<blockquote class="blockquote bq-pagina">
					<h3 class="bq-title"><i class="fa fa-search-plus"></i><strong> Resultados de:</strong></h3>
					<h2 class="text-right bq-text"><?php echo $busqueda; ?></h2>
				</blockquote>
				<blockquote class="blockquote bq-pagina">
					<ul class="nav flex-column">
						<li class="nav-item active">
							<a class="nav-link" href="#empresas" data-toggle="tab" rol="tab">Empresas</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#sectores" data-toggle="tab" rol="tab">Sectores</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#ofertas" data-toggle="tab" rol="tab">Ofertas de trabajo</a>
						</li>
					</ul>
				</blockquote>
			</div>

			<div class="col-md-8">
				<div class="tab-content container">
					<div class="tab-pane fade in show active" id="empresas" role="tabpanel">
						<div class="row">
							<h1>Empresas</h1>
						</div>
						<div class="row">
							<?php
							$query = "SELECT * FROM empresas WHERE nombre RLIKE '^".$busqueda."';";
							$resultado = $funciones->ejecutarQuery($query); ?>
							<?php while($fila = mysqli_fetch_assoc($resultado)) {
							$img = "store/empresas/".$fila['nit']."/img/"."300_".$fila["nit"].".png"; ?>
							<div class="card-body row">
								<div class="col-md-3 my-3">
									<div class="card-logo text-center">
										<img src="<?php echo $img ?>">
									</div>
								</div>
								<div class="col-md-7 align-self-center">
									<h3 class="mt-0 font-weight-bold"><?php echo $fila["nombre"]; ?></h3>
									<p class="h6 text-muted"><?php echo $fila["direccion"];?></p>
								</div>
								<div class="col-md-2 align-self-end">
									<a class="float-right" href="empresas/info.php?id=<?php echo $fila['nit'] ?>">Info <i class="fa fa-arrow-right"></i> </a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="tab-pane fade" id="sectores" role="tabpanel">
						<div class="row">
							<h1>Sectores</h1>
						</div>
						<div class="row">
							<?php
							$query = "SELECT * FROM sector_empresarial WHERE nombre_sector RLIKE '^".$busqueda."';";
							$resultado = $funciones->ejecutarQuery($query); ?>
							<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
							<div class="card card-body col-md-4 mx-2">
								<h4 class="card-title"><?php echo $fila['nombre_sector']; ?></h4>
								<div class="flex-row">
									<a href="#<?php echo $fila['id_sector'] ?>" class="card-link float-right">Ver Empresas</a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="tab-pane fade" id="ofertas" role="tabpanel">
						<div class="row">
							<h1>Ofertas</h1>
						</div>
						<div class="row">

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php require 'footer.php'; ?>
</body>
</html>
