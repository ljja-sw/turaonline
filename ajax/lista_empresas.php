<?php 
@include_once  '../php/conexion_db.php';

$C = new Conexion();

$link = $C->conectar();

$select_from = "SELECT empresas.nombre, correo, hash_contrasena, nit, direccion, telefono, descripcion,sector_empresarial.nombre as nombre_sector FROM empresas INNER JOIN sector_empresarial ON empresas.id_sector = sector_empresarial.id";
$where = "";

if (isset($_POST['sector']) && $_POST['sector'] != '') {
    $where .= " WHERE sector_empresarial.id ='".$_POST['sector']."'";
}

$orden= " ORDER BY nombre LIMIT 5";



$resultado = mysqli_query($link,$select_from.$where.$orden);

$numero_empresas = mysqli_query($link,"SELECT COUNT(id) FROM empresas");
clearstatcache();

if(mysqli_num_rows($resultado)>0){

	while ($fila = mysqli_fetch_assoc($resultado)) {
		$img = $fila['nit']."/img/"."300_".$fila['nit'].".png";
		?>
<div class="card card-empresa animated fadeIn">
    <div class="card-body row">
        <div class="col-md-3 my-3">
            <div class="card-logo text-center">
                <img src="../store/empresas/<?php echo $img ?>">
                </img>
            </div>
        </div>
        <div class="col-md-7 align-self-center">
            <p class="h5-responsive">
                <?php echo $fila["nombre"]; ?>
            </p>
            <p class="h6-responsive text-muted">
                <?php echo $fila['nombre_sector']; ?>
            </p>
            <p class="h6-responsive text-muted">
                <?php echo $fila["direccion"];?>
            </p>
        </div>
        <div class="col-md-2 align-self-end">
            <a class="float-right" href="empresas/info.php?id=<?php echo $fila['nit'] ?>">
                Info
                <i class="fa fa-arrow-right">
                </i>
            </a>
        </div>
    </div>
</div>
<?php } }else{ ?>
<div class="text-center my-5">
    <h1>
        <i class="fi-x">
        </i>
    </h1>
    <h1 class="display-4">
        No hay Empresas para Mostrar
    </h1>
    <strong>
        <p>
            No te preocupes muy pronto estarán disponibles
        </p>
    </strong>
</div>
<?php }?>
<!--Paginacion -->
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#">
                Anterior
            </a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">
                1
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">
                Siguiente
            </a>
        </li>
    </ul>
</nav>
<!--Fin Paginacion -->
