<?php
	require_once 'Funciones.php';

	$f = new Funciones();

	$SELECT_FROM = "SELECT ofertas.titulo,aspirantes.cedula,aspirantes.nombre,aspirantes.apellido, hv_aspirantes.directorio FROM aspirante_oferta";
	$WHERE= "";
	$JOIN = " INNER JOIN ofertas ON id_oferta = ofertas.id INNER JOIN aspirantes ON id_aspirante = aspirantes.id_usuario INNER JOIN hv_aspirantes ON hv_aspirantes.id_aspirante = aspirantes.id_usuario " ;
	$ORDER_BY = " ";

	$WHERE .= (isset($_POST['oferta'])) ? "WHERE ofertas.id = ".$_POST['oferta']  : " " ;
	
	$resultado = $f->ejecutarQuery($SELECT_FROM.$JOIN.$WHERE.$ORDER_BY);
?>
	            <table class="table table-hover mb-0">
	                <!--Table head-->
	                <thead>
	                    <tr>
	                        <th class="th-lg"><a href="#">Oferta<i class="fa fa-sort ml-1"></i></a></th>
	                        <th class="th-lg"><a href="#">Nombre Completo<i class="fa fa-sort ml-1"></i></a></th>
	                        <th class="th-lg"><a>Identificación<i class="fa fa-sort ml-1"></i></a></th>
	                        <th class="th-lg"><a href="#">Hoja de vida<i class="fa fa-sort ml-1"></i></a></th>
	                    </tr>
	                </thead>
	                <!--Table head-->
	                <!--Table body-->
	                <tbody>
	                	<?php if (mysqli_num_rows($resultado)>0): ?>
	           	            <?php while($filas = mysqli_fetch_assoc($resultado)){ ?>
						<tr>
	                        <td><?php echo $filas['titulo']; ?></td>
	                        <td><?php echo $filas['nombre']." ".$filas['apellido']; ?></td>
	                        <td><?php echo $filas['cedula']; ?></td>
	                        <td><a href="<?php echo $filas['directorio']; ?>" target="_blank">Ver</a></td>
	                    </tr>
	                	    <?php } ?>     		
	                	<?php else: ?>
						<tr>
	                        <td> --- </td>
	                        <td> --- </td>
	                        <td> --- </td>
	                        <td><a href="#">Ver</a></td>
	                    </tr>      		
	                	<?php endif ?>

	                </tbody>
	                <!--Table body-->
	            </table>

	        <hr class="my-1">