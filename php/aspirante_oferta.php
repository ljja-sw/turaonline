<?php
	require_once 'Funciones.php';

	$f = new Funciones();

	$SELECT_FROM = "SELECT ofertas.titulo,aspirante_oferta.estado_aspirante,aspirante_oferta.id_aspirante,aspirantes.cedula,aspirantes.nombre,aspirantes.apellido, hv_aspirantes.directorio,aspirante_oferta.id_oferta FROM aspirante_oferta";

	$WHERE= "";

	$JOIN = " INNER JOIN ofertas ON id_oferta = ofertas.id INNER JOIN aspirantes ON id_aspirante = aspirantes.id_usuario INNER JOIN hv_aspirantes ON hv_aspirantes.id_aspirante = aspirantes.id_usuario " ;

	$ORDER_BY = " ";

	$WHERE .= (isset($_POST['oferta'])) ? (($_POST['oferta'] == "") ? " WHERE " : "WHERE aspirante_oferta.id_oferta = ".$_POST['oferta']." AND ")  : "" ;

	$WHERE .= (isset($_POST['estado'])) ? (($_POST['estado'] == "") ? " id_oferta >0" : " aspirante_oferta.estado_aspirante = '".$_POST['estado']."' ")  : "" ;

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
	                        <th class="th-lg"><a href="#">Estado<i class="fa fa-sort ml-1"></i></a></th>
	                        <th class="th-lg"><a href="#"><i class="fa fa-user ml-1 mx-auto"></i></a></th>
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
	                        <td><?php echo $filas['estado_aspirante']; ?></td>
	                        <td class="text-bold">
	                        	<?php if ($filas['estado_aspirante'] == "Postulado"): ?>
	                        		<a id="modo_espera" id_oferta="<?php echo $filas['id_oferta']; ?>" id_aspirante="<?php echo $filas['id_aspirante']; ?>" href="#">Enviar a modo de Espera</a>
	                        	<?php else: ?>
	                        		<a href="../oferta/en_espera.php">Ver aspirantes en Espera</a>
	                        	<?php endif ?>
	                        </td>
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