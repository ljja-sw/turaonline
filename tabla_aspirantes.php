<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control">
<?php
$titulo = "Aspirantes a Ofertas";
require "head.php";?>
<link rel="stylesheet" type="text/css" href="css/estilos_tabla_aspirantes.css">
<body>
	<?php include 'navbar.php';?>

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
	<div class="card p-2 mb-5">
	    <!--Grid row-->
	    <div class="row">
	        <!--Grid column-->
	        <div class="col-lg-3 col-md-12">
	            <!--Name-->
	            <select class="form-control mdb-select colorful-select dropdown-primary mx-2">
	                <option value="" disabled selected>Bulk actions</option>
	                <option value="1">Delate</option>
	                <option value="2">Export</option>
	                <option value="3">Change segment</option>
	            </select>
	        </div>
	        <!--Grid column-->
	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6">
	            <!--Blue select-->
	            <select class="form-control mdb-select colorful-select dropdown-primary mx-2">
	                <option value="" disabled selected>Show only</option>
	                <option value="1">All <span> (2000)</span></option>
	                <option value="2">Never opened <span> (200)</span></option>
	                <option value="3">Opened but unanswered <span> (1800)</span></option>
	                <option value="4">Answered <span> (200)</span></option>
	                <option value="5">Unsunscribed <span> (50)</span></option>
	            </select>
	            <!--/Blue select-->
	        </div>
	        <!--Grid column-->
	        <!--Grid column-->
	        <div class="col-lg-3 col-md-6">
	            <!--Blue select-->
	            <select class="form-control mdb-select colorful-select dropdown-primary mx-2">
	                <option value="" disabled selected>Filter segments</option>
	                <option value="1">Contacts in no segments <span> (100)</span></option>
	                <option value="1">Segment 1 <span> (2000)</span></option>
	                <option value="2">Segment 2 <span> (1000)</span></option>
	                <option value="3">Segment 3 <span> (4000)</span></option>
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
	    <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center" style="background-color:rgba(117,181,240,0.99);">
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
	    <!--/Card image-->
	    <div class="px-4">
	        <div class="table-wrapper">
	            <!--Table-->
	            <table class="table table-hover mb-0">
	                <!--Table head-->
	                <thead>
	                    <tr>
	                        <th>
	                            <input type="checkbox" id="checkbox" class="checkbox">
	                            <label for="checkbox" class="mr-2 label-table"></label>
	                        </th>
	                        <th class="th-lg"><a href="">Oferta<i class="fa fa-sort ml-1"></i></a></th>
	                        <th class="th-lg"><a>Identificación<i class="fa fa-sort ml-1"></i></a></th>
	                        <th class="th-lg"><a href="">Nombre Completo<i class="fa fa-sort ml-1"></i></a></th>
	                        <th class="th-lg"><a href="">Hoja de vida<i class="fa fa-sort ml-1"></i></a></th>
	                    </tr>
	                </thead>
	                <!--Table head-->
	                <!--Table body-->
	                <tbody>
	                    <tr>
	                        <th scope="row">
	                            <input type="checkbox" id="checkbox1">
	                            <label for="checkbox1" class="label-table"></label>
	                        </th>
	                        <td>Punto de Venta</td>
	                        <td>1111812345</td>
	                        <td>Juiner Solis Garcia</td>
	                        <td>@mdo</td>
	                    </tr>
	                    <tr>
	                        <th scope="row">
	                            <input type="checkbox" id="checkbox2">
	                            <label for="checkbox2" class="label-table"></label>
	                        </th>
	                        <td>Cajero Principal</td>
	                        <td>1111456678</td>
	                        <td>Jean Carlos Gallego</td>
	                        <td>@fat</td>
	                    </tr>
	                    <tr>
	                        <th scope="row">
	                            <input type="checkbox" id="checkbox3">
	                            <label for="checkbox3" class="label-table"></label>
	                        </th>
	                        <td>Punto de Venta</td>
	                        <td>1111657894</td>
	                        <td>Jose Antonio Montaño</td>
	                        <td>@twitter</td>
	                    </tr>
	                    <tr>
	                        <th scope="row">
	                            <input type="checkbox" id="checkbox3">
	                            <label for="checkbox3" class="label-table"></label>
	                        </th>
	                        <td>Cajero Principal</td>
	                        <td>1111573064</td>
	                        <td>Lewis David Riascos Riascos</td>
	                        <td>@twitter</td>
	                    </tr>
	                </tbody>
	                <!--Table body-->
	            </table>
	            <!--Table-->
	        </div>
	        <hr class="my-0">
	        <!--Bottom Table UI-->
	        <div class="d-flex justify-content-between col-lg-12 col-md-12">
	            <!--Name-->
	            <select class="form-control col-lg-2 col-md-2 mdb-select colorful-select dropdown-primary mt-2 hidden-md-down">
	                <option value="" disabled >Rows number</option>
	                <option value="1" selected>10 rows</option>
	                <option value="2">25 rows</option>
	                <option value="3">50 rows</option>
	                <option value="4">100 rows</option>
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
	        <!--Bottom Table UI-->
	    </div>
	</div>
</div>
	<?php include 'footer.php'; ?>
</body>
</html>