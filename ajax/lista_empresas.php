<?php 

$C = new Conexion();

$link = $C->conectar();

$query = "SELECT * FROM Empresas";

$resultado = mysqli_query($link,$query);

clearstatcache();

if(mysqli_num_rows($resultado)>0){

	while ($fila = mysqli_fetch_assoc($resultado)) {

		if (opendir("store/empresas/".$fila['nit'])) {
			$file = mysqli_real_escape_string($link,$fila["id_empresa"]);
			if (file_exists("store/empresas/".$fila['nit']."/img/".$file.".png")) {
				$img = $fila['nit']."/img/".$file.".png";
			}
			
		}
		$query_sector = "SELECT nombre_sector FROM sector_empresarial WHERE id_sector=".$fila["sector"].";";
		$resultado_s = mysqli_query($link,$query_sector);
		$sector_empresa = mysqli_fetch_assoc($resultado_s);
		?>


		<div class="card card-empresa">
			<div class="card-body row">
				<div class="col-md-3 my-3">
					<div class="card-logo text-center">
						<img src="../store/empresas/<?php echo $img ?>">
					</div>
				</div>
				<div class="col-md-7 align-self-center">
					<h5 class="mt-0 font-weight-bold"><?php echo $fila["nombre"]; ?></h5>
					<p class="h6 text-muted"><?php echo $sector_empresa['nombre_sector']; ?></p>
					<p class="h6 text-muted"><?php echo $fila["direccion"];?></p>
				</div>
				<div class="col-md-2 align-self-end">
					<a class="float-right" href="empresas/info.php?id=<?php echo $fila['nit'] ?>">Info <i class="fa fa-arrow-right"></i> </a>
				</div>
			</div>
		</div>

		<?php } }else{ ?>
		<div class="text-center my-5">
			<h1><i class="fi-x"></i></h1>
			<h1 class="display-4">No hay Empresas para Mostrar</h1>
			<strong><p>No te preocupes muy pronto estarán disponibles</p></strong>
		</div>
		<?php }