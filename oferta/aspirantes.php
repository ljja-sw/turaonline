<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control">
<?php
$titulo = "Aspirantes a Ofertas";
require "../head.php";
include_once "../php/Funciones.php";
$f = new Funciones();?>

<link rel="stylesheet" type="text/css" href="css/estilos_tabla_aspirantes.css">
<body>
	<?php include '../navbar.php';?>

	<script type="text/javascript">

	var input = document.querySelectorAll("label.check input");
		if(input !== null) {
		  [].forEach.call(input, function(el) {
		    if(el.checked) {
		      el.parentNode.classList.add('c_on');
		    }
		    el.addEventListener("click", function(event) {
		      event.preventDefault();
		      el.parentNode.classList.toggle('c_on');
		    }, false);
		  });
		}

	</script>

<div class="container">

	<!--Top Table UI-->
	<div class="card p-2 m-5">
	    <!--Grid row-->
	    <div class="row">
	    <?php 	$resultado = $f->ejecutarQuery("SELECT titulo FROM ofertas WHERE id_empresa = ".$_SESSION['id_empresa']); ?>
            <!--Grid column-->
	        <div class="col-lg-3 col-md-6">
	            <!--Blue select-->
	            <select class="form-control mdb-select colorful-select dropdown-primary mx-2">
	                <option value="" disabled selected>Tus Ofertas</option>
	                	<?php while($filas = mysqli_fetch_assoc($resultado)){ ?>
	                <option value="1"><?php echo $filas['titulo']; ?></option>
	                	<?php } ?>
	            </select>
	            <!--/Blue select-->
	        </div>
	        <!--Grid column-->
            
	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6">
	            <form class="form-inline mt-2 ml-2">
	                <input class="form-control my-0 py-0" type="text" placeholder="Search" style="max-width: 150px;">
	                <button class="btn btn-sm btn-primary ml-2 px-1"><i class="fa fa-search"></i>  </button>
	            </form>
	        </div>
	        <!--Grid column-->
	    </div>
	    <!--Grid row-->
	</div>

	<!--Top Table UI-->
	<div class="card card-cascade narrower">
	    <!--Card image-->
	    <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center bg-pagina">
	        <div>
	            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fa fa-th-large mt-0"></i></button>
	            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fa fa-columns mt-0"></i></button>
	        </div>
	        <a href="" class="white-text mx-3">Aspirantes</a>
	        <div>
	            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fa fa-pencil mt-0"></i></button>
	            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fa fa-remove mt-0"></i></button>
	            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fa fa-info-circle mt-0"></i></button>
	        </div>
	    </div>
<?php include "../php/aspirante_oferta.php" ?>
	</div>
</div>
	<?php include '../footer.php'; ?>
</body>
</html>