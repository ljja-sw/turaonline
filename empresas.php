<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<?php
$titulo = "Empresas";
require "head.php" ?>
<link rel="stylesheet" type="text/css" href="../css/empresas.css">
<body>

	<?php require "navbar.php";?>
	<?php require "php/Funciones.php";
	$funciones = new Funciones();
	?>
	<section class="fondo-carousel padding">
		
		<div class="container cabecera"> 

			<!--Carousel Wrapper-->
			<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
				<!--Indicators-->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-2" data-slide-to="1"></li>
					<li data-target="#carousel-example-2" data-slide-to="2"></li>
				</ol>
				<!--/.Indicators-->
				<!--Slides-->
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="view">
							<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
							<div class="mask rgba-black-light"></div>
						</div>
						<div class="carousel-caption">
							<h3 class="h3-responsive">Light mask</h3>
							<p>First text</p>
						</div>
					</div>
					<div class="carousel-item">
						<!--Mask color-->
						<div class="view">
							<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
							<div class="mask rgba-black-strong"></div>
						</div>
						<div class="carousel-caption">
							<h3 class="h3-responsive">Strong mask</h3>
							<p>Secondary text</p>
						</div>
					</div>
					<div class="carousel-item">
						<!--Mask color-->
						<div class="view">
							<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
							<div class="mask rgba-black-slight"></div>
						</div>
						<div class="carousel-caption">
							<h3 class="h3-responsive">Slight mask</h3>
							<p>Third text</p>
						</div>
					</div>
				</div>
				<!--/.Slides-->
				<!--Controls-->
				<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				<!--/.Controls-->
			</div>
			<!--/.Carousel Wrapper-->

		</div>

	</section>

	<section class="container">

		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-4 "> 

			  <div class="card">
				<h6 class="card-header principal text-white">Sector</h6>
				
				<ul class="card-body clist-group list-group-flush list-sectores">
				   <?php for ($i=0; $i < 10; $i++) { ?>
				   <a href="#" class="list-group-item">Item <?php echo $i+1 ?></a>
				   <?php } ?>
			   </ul>
		   </div>

	   </div>
	   <!-- Sidebar -->

	   <!-- Empresas -->
	   <div class="col-md-8">
		
		<!--Lista Empresas -->
		<?php include 'ajax/lista_empresas.php'; ?>
		<!--Fin Lista Empresas -->

		<!--Paginacion -->
		<nav aria-label="Page navigation">
		  <ul class="pagination justify-content-center">
			<li class="page-item"><a class="page-link" href="#">Anterior</a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
		</ul>
	</nav>
	<!--Fin Paginacion -->

</div>
</div>
</section>

<?php include "footer.php" ?>

</body>
</html>
