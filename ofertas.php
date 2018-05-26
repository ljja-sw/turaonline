<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<script type="text/javascript" src="js/ofertas.js"></script>

<?php
	if (isset($_GET['s'])) {
	$boferta = $_GET['s'];
	} else {
		$boferta = "";
	}

	$titulo = "Ofertas";
	require "head.php"; 
?>
<link rel="stylesheet" href="css/ofertas.css">

<body>
	<?php include 'navbar.php';?>

	<div class="container-fluid" style="">
		<div class="row my-4">
			<div class="col-12 col-md-4">
				<div class="card">
					<div class="card-header">
						<h2>Fecha de publicacion</h2>
					</div>
					<div class="cont" >
							<div class="row">
									<label class="col-9 col-md-10" for="check1" >Hoy</label> <input class="col-3 col-md-2 inputChe" action="js/lista_oferta.js" id="check1" type="checkbox" value="hoy">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="check2" action="ajax/busqueda_oferta.php?s=U2D">Último 2 días</label><input class="col-3 col-md-2 input" id="check2" type="checkbox" value="Último 2 días">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="check3" action="ajax/busqueda_oferta.php?s=US">Última samana</label><input class="col-3 col-md-2 input" id="check3" type="checkbox" value="Última samana">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="check4" action="ajax/busqueda_oferta.php?s=U15D">Últimos 15 días</label><input class="col-3 col-md-2 input" id="check4" type="checkbox" value="Últimos 15 días">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="check5" action="ajax/busqueda_oferta.php?s=UM">Último mes</label><input class="col-3 col-md-2 input" id="check5" type="checkbox" value="Último mes">
							</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h2>Salario</h2>
					</div>
					<div class="card-body">
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
				<div class="card">
					<div class="card-header">
						<h2>Tipo de contrato</h2>
					</div>
					<div class="card-body">
						<form action="../php/login.php?l=Tcontrato" method="post">
							<div class="row">
								<label class="col-9 col-md-10" for="TP1">Contrato de Obra o labor</label><input class="col-3 col-md-2 input" id="TP1" name="check" type="checkbox" value="Contrato de Obra o labor">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP2">Contrato a término indefinido</label><input class="col-3 col-md-2 input" name="check" id="TP2" type="checkbox" value="Contrato a término indefinido">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP3">Contrato a término fijo</label><input class="col-3 col-md-2 input" name="check" id="TP3" type="checkbox" value="Contrato a término fijo">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP4">Contrato civil por prestación de servicios</label><input class="col-3 col-md-2 input" name="check" id="TP4" type="checkbox" value="ontrato civil por prestación de servicios">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP5">Contrato de aprendizaje</label><input type="checkbox" class="col-3 col-md-2 input" name="check" id="TP5" value="Contrato de aprendizaje">
							</div>
							<div class="row">
								<label class="col-9 col-md-10" for="TP6">Contrato ocasional de trabajo</label><input class="col-3 col-md-2 input" name="check" id="TP6" type="checkbox" value="Contrato ocasional de trabajo">
							</div>
						</form>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h2>Tipo de jornada</h2>
					</div>
					<div class="card-body">
							<div class="row">
								<label class="col-9 col-md-10 TJ" for="TJ1" action="ajax/busqueda_oferta.php?s=TJ1">Tiempo Completo</label><input class="col-3 col-md-2 input" id="TJ1" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10 TJ" for="TJ2" action="ajax/busqueda_oferta.php?s=TJ2">Tiempo Parcial</label><input class="col-3 col-md-2 input" id="TJ2" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10 TJ" for="TJ3" action="ajax/busqueda_oferta.php?s=TJ3">Por Horas</label><input class="col-3 col-md-2 input" id="TJ3" type="checkbox">
							</div>
							<div class="row">
								<label class="col-9 col-md-10 TJ" for="TJ4" action="ajax/busqueda_oferta.php?s=TJ4">Beca/prácticas</label><input class="col-3 col-md-2 input" id="TJ4" type="checkbox" onclick="buscarpp();">
							</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-8">
					<?php include 'ajax/lista_ofertas.php'; ?>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
    <script type="text/javascript" src="js/lista_oferta.js"></script>
</body>
</html>