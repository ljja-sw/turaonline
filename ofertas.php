<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<script type="text/javascript" src="js/ofertas.js"></script>

<?php
	$titulo = "Ofertas";
	require "head.php"; 
?>
<link rel="stylesheet" type="text/css" href="css/ofertas.css">

<body>
	<?php include 'navbar.php';?>

	<div class="container-fluid" style="">
		<div class="row">
			<div class="col-md-4 nav_lateral">
				<div class="fecha_publicacion">
					<div class="titulo_div">
						<h2>Fecha de publicacion</h2>
					</div>
					<div class="cont">
						<h3>Hoy</h3>
						<h3>Último 2 días</h3>
						<h3>Última samana</h3>
						<h3>Últimos 15 días</h3>
						<h3>Último mes</h3>
					</div>
				</div>
				<div class="Salario">
					<div class="titulo_div">
						<h2>Salario</h2>
					</div>
					<div class="cont">
						<h3>Menos de $ 700.000</h3>
						<h3>Más de $ 700.000</h3>
						<h3>Más de $ 1.000.000</h3>
						<h3>Más de $ 1.500.000</h3>
						<h3>Más de $ 2.000.000</h3>
						<h3>Más de $ 2.500.000</h3>
						<h3>Más de $ 3.000.000</h3>
					</div>
				</div>
				<div class="tipo_contrato">
					<div class="titulo_div">
						<h2>Tipo de contrato</h2>
					</div>
					<div class="cont">
						<h3>Contrato de Obra o labor</h3>
						<h3>Contrato a término indefinido</h3>
						<h3>Contrato a término fijo</h3>
						<h3>Contrato civil por prestación de servicios</h3>
						<h3>Contrato de aprendizaje</h3>
						<h3>Contrato ocasional de trabajo</h3>
					</div>
				</div>
				<div class="tipo_jornada">
					<div class="titulo_div">
						<h2>Tipo de jornada</h2>
					</div>
					<div class="cont">
						<h3>Contrato de Obra o labor</h3>
						<h3>Contrato a término indefinido</h3>
						<h3>Contrato a término fijo</h3>
						<h3>Contrato civil por prestación de servicios</h3>
						<h3>Contrato de aprendizaje</h3>
						<h3>Contrato ocasional de trabajo</h3>
					</div>
				</div>
			</div>
			<div class="col-md-8 contenido">
				<?php include 'ajax/lista_ofertas.php'; ?>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>
