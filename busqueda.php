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
        				<a href="#<?php echo $fila['id_sector'] ?>" class="card-link float-right">Ver Empresas <i class="fa fa-info"></i></a>
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
