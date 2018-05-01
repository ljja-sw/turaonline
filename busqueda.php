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
?>

<body>
	<?php require 'navbar.php';  ?>

	<section class="container-fluid my-3">
		<div class="row">

			<div class="col-md-3 ">

			 <blockquote class="blockquote bg-pagina">
				<h3 class="bq-title"><i class="fa fa-search-plus"></i><strong> Resultados de:</strong></h3>
				<h2 class="text-right bq-text"><?php echo $busqueda; ?></h2>
			</blockquote>
			<blockquote class="blockquote bg-pagina">
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
			<div class="tab-content">
				<div class="tab-pane fade in show active" id="empresas" role="tabpanel">
					<h1>Empresas</h1>
					<div class="resultados">

					</div>
				</div>
				<div class="tab-pane fade" id="sectores" role="tabpanel">
					<h1>Sectores</h1>
				</div>
				<div class="tab-pane fade" id="ofertas" role="tabpanel">
					<h1>Ofertas</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require 'footer.php'; ?>
<script type="text/javascript">
	$("#buscar").on('shown.bs.modal', function(){
    alert("Hello World!");
});  
</script>
</body>

</html>
