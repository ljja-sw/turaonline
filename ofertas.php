<?php session_start(); ?>
<!DOCTYPE html>

<script type="text/javascript" src="js/ofertas.js"></script>
<?php
	$titulo = "Ofertas";
	require "head.php" 
?>
<link rel="stylesheet" type="text/css" href="css/ofertas.css">

<body>
	<?php include 'navbar.php';?>

	<div class="contenido" style="">
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
			<div class="col-md-8 conten_ofertas">
				<div class="contenido2">
					<div class="publicaciones" style="background-color: #E5E7E9;">
						<a class="nom-oferta" href="#">Nombre de oferta</a>
						<div class="localizacion row">
							<span class="col-md-4">
								<a class="nom-empresa" href="">Nombre empresa</a>
							</span>
							<a class="evaluacion col-md-8" href="">Evaluacion</a>
							<span class="ubicacion col-md-12">Buenaventura, Valle del Cauca</span>
						</div>
						<div class="contenido_descripcion">
							<span class="descripcion">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem ea ducimus atque quasi, nostrum maxime officia ullam sed, possimus inventore quod. Eveniet in, neque quod, fugit illo aspernatur perferendis laudantium?...
							</span>
						</div>
						<div class="row tiempoP_boton">
							<div class="tiempo_publicacion">
								<span class="date">hace 10 horas</span>
							</div>
							<button>Aplicar</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>
