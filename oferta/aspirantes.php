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
	    <?php 	$resultado = $f->ejecutarQuery("SELECT titulo,id FROM ofertas WHERE id_empresa = ".$_SESSION['id_empresa']); ?>
            <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mx-auto">
	            <!--Blue select-->
	            <select id="nombre_oferta" class="form-control mdb-select colorful-select dropdown-primary mx-2">
	                <option value="" disabled selected>Tus Ofertas</option>
	                	<?php while($filas = mysqli_fetch_assoc($resultado)){ ?>
	                <option value="<?php echo $filas['id'] ?>">
	                	<?php echo $filas['titulo']; ?>
	                </option>
	                	<?php } ?>
	            </select>
	            <!--/Blue select-->
	        </div>
	        <!--Grid column-->
	                    <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mx-auto">
	            <!--Blue select-->
	            <select id="estado_aspirante" class="form-control mdb-select colorful-select dropdown-primary mx-2">
	                <option value="" disabled selected>Estado</option>
	                <option value="">Todos</option>
	                <option value="Postulado">Postulado</option>
	                <option value="En Espera">En Espera</option>
	            </select>
	            <!--/Blue select-->
	        </div>
	        <!--Grid column-->
            
	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6 mx-auto">
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
	    <div class="view card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center ">
	        <h3 class="mx-auto">Aspirantes</h3>
	    </div>
	    <div class="px-4">
	        <div class="table-wrapper" id="tabla-aspirantes-oferta">
				<?php include "../php/aspirante_oferta.php" ?>
	        </div>
	        <!--Bottom Table UI-->
	        <div class="d-flex justify-content-between col-lg-12 col-md-12">
	            <!--Name-->
	            <select id="limite" class="form-control col-lg-2 col-md-2 mdb-select colorful-select dropdown-primary mt-2 hidden-md-down">
	                <option value="" disabled >Numero de Aspirantes</option>
	                <option value="10" selected>10</option>
	                <option value="25">25</option>
	                <option value="50">50</option>
	                <option value="100">100</option>
	            </select>

	            <!--Pagination -->
	            <nav class="my-4">
	                <ul class="float-right pagination pagination-circle pg-blue mb-0">
	                    <!--First-->
	                    <li class="page-item disabled"><a class="page-link">First</a></li>

	                    <!--Arrow left-->
	                    <li class="page-item disabled">
	                        <a class="page-link" aria-label="Previous">
	                        <span aria-hidden="true">&laquo;</span>
	                        <span class="sr-only">Previous</span>
	                    </a>
	                    </li>
	                    <!--Numbers-->
	                    <li class="page-item active"><a class="page-link">1</a></li>
	                    <li class="page-item"><a class="page-link">2</a></li>
	                    <li class="page-item"><a class="page-link">3</a></li>
	                    <li class="page-item"><a class="page-link">4</a></li>
	                    <li class="page-item"><a class="page-link">5</a></li>
	                    <!--Arrow right-->
	                    <li class="page-item">
	                        <a class="page-link" aria-label="Next">
	                        <span aria-hidden="true">&raquo;</span>
	                        <span class="sr-only">Next</span>
	                    </a>
	                    </li>
	                    <!--First-->
	                    <li class="page-item"><a class="page-link">Last</a></li>
	                </ul>
	            </nav>
	            <!--/Pagination -->

		</div>
	    </div>

	</div>
</div>
	<?php include '../footer.php'; ?>
	<script src="../js/ofertas.js" type="text/javascript"></script>
</body>
</html>