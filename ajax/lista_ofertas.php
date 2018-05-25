<?php 

switch ($_GET["s"]) {
	case 'hoy':
				if(isset($_GET["s"]) && $_GET["s"] == "hoy"){
					$valor = $_GET["s"];
					bOfertaFP($valor);
				}
		break;
	case 'U2D':
				if(isset($_GET["s"]) && $_GET["s"] == "U2D"){
					$valor = $_GET["s"];
					bOfertaFP($valor);
				}
		break;
	case 'US':
				if(isset($_GET["s"]) && $_GET["s"] == "US"){
					$valor = $_GET["s"];
					bOfertaFP($valor);
				}
		break;
	case 'U15D':
				if(isset($_GET["s"]) && $_GET["s"] == "U15D"){
					$valor = $_GET["s"];
					bOfertaFP($valor);
				}
		break;
	case 'UM':
			if(isset($_GET["s"]) && $_GET["s"] == "UM"){
				$valor = $_GET["s"];
				bOfertaFP($valor);
			}
		break;
	case 'TJ1':
			if(isset($_GET["s"]) && $_GET["s"] == "TJ1"){
				$valor = $_GET["s"];
				bOfertaFP($valor);
			}
		break;
	case 'TJ2':
			if(isset($_GET["s"]) && $_GET["s"] == "TJ2"){
				$valor = $_GET["s"];
				bOfertaFP($valor);
			}
		break;
	case 'TJ3':
			if(isset($_GET["s"]) && $_GET["s"] == "TJ3"){
				$valor = $_GET["s"];
				bOfertaFP($valor);
			}
		break;
	case 'TJ4':
			if(isset($_GET["s"]) && $_GET["s"] == "TJ4"){
				$valor = $_GET["s"];
				bOfertaFP($valor);
			}
		break;
	
	default:
			bOfertaFPSinValor();
		break;
}

function bOfertaFP($valor){
	include '../php/Funciones.php';
  	$f = new Funciones();
	$query = "SELECT titulo,ofertas.descripcion,empresas.nombre,empresas.nit,ofertas.descripcion FROM ofertas INNER JOIN empresas ON ofertas.id_empresa = empresas.id where fecha_publicacion == $valor";

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
						<a class="btn btn-outline-pagina" data-toggle="modal" data-target="#MasInformacion">Ver Oferta</a>
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
	<?php }
} ?>

<?php
function bOfertaFPSinValor(){
	include 'php/Funciones.php';
  	$f = new Funciones();

	$query = "SELECT titulo,ofertas.descripcion,empresas.nombre,empresas.nit,ofertas.descripcion FROM ofertas INNER JOIN empresas ON ofertas.id_empresa = empresas.id";

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
						<a class="btn btn-outline-pagina" data-toggle="modal" data-target="#MasInformacion">Ver Oferta</a>
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
	<?php }
} ?>

