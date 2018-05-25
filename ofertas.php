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
			<div class="col-12 col-md-4 nav_lateral">
				<div class="fecha_publicacion card">
					<div class="titulo_div">
						<h2>Fecha de publicacion</h2>
					</div>
					<div class="cont" >
						<form action="../php/login.php?l=Fpublicacion" method="post">
							<div class="row">
								<label class="col-9 col-md-10" for="hoy" action="ajax/busqueda_oferta.php?s=hoy">Hoy</label><input class="col-3 col-md-2 inputChe" id="hoy" type="checkbox" checked="select1">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="U2D" action="ajax/busqueda_oferta.php?s=U2D">Último 2 días</label><input class="col-3 col-md-2 input" id="U2D" type="checkbox" checked="select2">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="US" action="ajax/busqueda_oferta.php?s=US">Última samana</label><input class="col-3 col-md-2 input" id="US" type="checkbox" checked="select3">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="U15D" action="ajax/busqueda_oferta.php?s=U15D">Últimos 15 días</label><input class="col-3 col-md-2 input" id="U15D" type="checkbox" checked="select4">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="UM" action="ajax/busqueda_oferta.php?s=UM">Último mes</label><input class="col-3 col-md-2 input" id="UM" type="checkbox" checked="select5">
							</div>
						</form>
					</div>
				</div>
				<div class="Salario card">
					<div class="titulo_div">
						<h2>Salario</h2>
					</div>
					<div class="cont">
						<form action="../php/login.php?l=salario" method="post">
							<div class="row">
								<label class="col-9 col-md-10" for="Salario1">Menos de $ 700.000</label><input class="col-3 col-md-2 input" id="Salario1" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="Salario2">Más de $ 700.000</label><input class="col-3 col-md-2 input" id="Salario2" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="Salario3">Más de $ 1.000.000</label><input class="col-3 col-md-2 input" id="Salario3" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="Salario4">Más de $ 1.500.000</label><input class="col-3 col-md-2 input" id="Salario4" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="Salario5">Más de $ 2.000.000</label><input class="col-3 col-md-2 input" id="Salario5" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="Salario6">Más de $ 2.500.000</label><input class="col-3 col-md-2 input" id="Salario6" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="Salario7">Más de $ 3.000.000</label><input class="col-3 col-md-2 input" id="Salario7" type="checkbox">
							</div>
						</form>
					</div>
				</div>
				<div class="tipo_contrato card">
					<div class="titulo_div">
						<h2>Tipo de contrato</h2>
					</div>
					<div class="cont">
						<form action="../php/login.php?l=Tcontrato" method="post">
							<div class="row">
								<label class="col-9 col-md-10" for="TP1">Contrato de Obra o labor</label><input class="col-3 col-md-2 input" id="TP1" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP2">Contrato a término indefinido</label><input class="col-3 col-md-2 input" id="TP2" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP3">Contrato a término fijo</label><input class="col-3 col-md-2 input" id="TP3" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP4">Contrato civil por prestación de servicios</label><input class="col-3 col-md-2 input" id="TP4" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP5">Contrato de aprendizaje</label><input class="col-3 col-md-2 input" id="TP5" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP6">Contrato ocasional de trabajo</label><input class="col-3 col-md-2 input" id="TP6" type="checkbox">
							</div>
						</form>
					</div>
				</div>
				<div class="tipo_jornada card">
					<div class="titulo_div">
						<h2>Tipo de jornada</h2>
					</div>
					<div class="cont">
							<div class="row">
								<label class="col-9 col-md-10" for="TJ1" action="ajax/busqueda_oferta.php?s=TJ1">Tiempo Completo</label><input class="col-3 col-md-2 input" id="TJ1" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TJ2" action="ajax/busqueda_oferta.php?s=TJ2">Tiempo Parcial</label><input class="col-3 col-md-2 input" id="TJ2" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TJ3" action="ajax/busqueda_oferta.php?s=TJ3">Por Horas</label><input class="col-3 col-md-2 input" id="TJ3" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TJ4" action="ajax/busqueda_oferta.php?s=TJ4">Beca/prácticas</label><input class="col-3 col-md-2 input" id="TJ4" type="checkbox">
							</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-8 contenido" style="padding-bottom: 50px;">
				<div class="contenido2">
					<?php include 'ajax/lista_ofertas.php'; ?>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>