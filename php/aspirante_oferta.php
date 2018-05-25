<?php
	$SELECT_FROM = "SELECT ofertas.titulo,aspirantes.cedula,aspirantes.nombre,aspirantes.apellido, hv_aspirantes.directorio FROM aspirante_oferta";

	$WHERE= "";

	$JOIN = " INNER JOIN ofertas ON id_oferta = ofertas.id INNER JOIN aspirantes ON id_aspirante = aspirantes.id_usuario INNER JOIN hv_aspirantes ON hv_aspirantes.id_aspirante = aspirantes.id_usuario" ;
	$ORDER_BY = "";

	$WHERE .= " WHERE ofertas.titulo = 'Probando Probando' ";

	$resultado = $f->ejecutarQuery($SELECT_FROM.$JOIN.$WHERE.$ORDER_BY);

?>

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
	                        <th class="th-lg"><a href="">Nombre Completo<i class="fa fa-sort ml-1"></i></a>
	                        </th>
	                        <th class="th-lg"><a>Identificación<i class="fa fa-sort ml-1"></i></a></th>
	                        <th class="th-lg"><a href="">Hoja de vida<i class="fa fa-sort ml-1"></i></a></th>
	                    </tr>
	                </thead>
	                <!--Table head-->
	                <!--Table body-->
	                <tbody>
	                	<?php while($filas = mysqli_fetch_assoc($resultado)){ ?>
						<tr>
	                        <th scope="row">
	                            <input type="checkbox" id="checkbox1">
	                            <label for="checkbox1" class="label-table"></label>
	                        </th>
	                        <td><?php echo $filas['titulo']; ?></td>
	                        <td><?php echo $filas['nombre']." ".$filas['apellido']; ?></td>
	                        <td><?php echo $filas['cedula']; ?></td>
	                        <td><a href="<?php echo $filas['directorio']; ?>" targer="_blank">Ver</a></td>
	                    </tr>
	                	<?php } ?>
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
