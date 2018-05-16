<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control">
<?php
$titulo = "Inicio";
require "head.php";
include 'php/Funciones.php';
$f = new Funciones(); ?>
<link href="../css/index.css" rel="stylesheet"/>
<body>
    <?php 
    require 'navbar.php';
    ?>
    <section class="container padding cabecera">
        <div class="row">
            <div class="col-md">
                <!--Carousel Wrapper-->
                <div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-example-2">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#carousel-example-2">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-example-2">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-example-2">
                        </li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="view">
                                <img alt="Buenaventura" class="d-block w-100 img-fluid" src="img/overlay.jpg">
                                <div class="mask rgba-black-strong">
                                </div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">
                                Bienvenido a TuraOnline
                            </h3>
                            <p>
                                Te invitamos a navegar por nuestro sitio y promover el empleo en Buenaventura.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img alt="Soporte" class="d-block w-100 img-fluid" src="img/slider/s1.jpg">
                            <div class="mask rgba-black-strong">
                            </div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">
                            Contactanos
                        </h3>
                        <p>
                            SI tienes alguna sugerencia no dudes en contactarnos por medio de nuestras redes sociales.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img alt="Trabajos" class="d-block w-100 img-fluid" src="img/slider/s2.jpg">
                        <div class="mask rgba-black-strong">
                        </div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">
                        ¿Sabías que?
                    </h3>
                    <p>
                        Buenaventura el el principal puerto de Colombia, lo cual hace de esta ciudad un atractivo turistico y empresarial.
                    </p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" data-slide="prev" href="#carousel-example-2" role="button">
            <span aria-hidden="true" class="carousel-control-prev-icon">
            </span>
            <span class="sr-only">
                Previous
            </span>
        </a>
        <a class="carousel-control-next" data-slide="next" href="#carousel-example-2" role="button">
            <span aria-hidden="true" class="carousel-control-next-icon">
            </span>
            <span class="sr-only">
                Next
            </span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
</div>
<div class="col-md-2 align-self-center">
    <div class="card">
        <div class="card-body text-center">
            <h3>
                <?php  
                $f->
                contar('empresas');
                ?>
            </h3>
            <p>
                Empresas registradas
            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-body text-center">
            <h3>
                <?php 
                $f->
                contar('ofertas');
                ?>
            </h3>
            <p>
                Publicaciones ralizadas
            </p>
        </div>
    </div>
</div>
</div>
</section>

<section class="container">

</section>

<section class="container-fluid my-3">
    <div class="row">
        <h2 class="h2-responsive mx-4">
            <strong>Empresas</strong>
        </h2>
    </div>
    <div class="row">
        <div class="d-flex offset-md-1 col-md-5 d-flex align-items-center">
         <h3 class="card card-header h3-responsive">
             <i class="fa fa-clock fa-2x m-2 text-center"></i>
         Empresa registrada Recientemente</h3>
     </div>

     <div class="col-md-6">
        <?php $query = "SELECT empresas.nombre, correo, hash_contrasena, nit, direccion, telefono, descripcion,sector_empresarial.nombre as nombre_sector FROM empresas INNER JOIN sector_empresarial ON empresas.id_sector = sector_empresarial.id ORDER BY fecha_registro LIMIT 1";
        $resultado = $f->ejecutarQuery($query); ?>

        <?php while ($fila = mysqli_fetch_assoc($resultado)) { 
            $img = $fila['nit']."/img/"."300_".$fila['nit'].".png"; 
            ?>
            <div class="card card-empresa">
                <div class="card-body row">
                    <div class="col-md-3 my-3">
                        <div class="card-logo text-center">
                            <img src="store/empresas/<?php echo $img ?>">
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
        <?php } ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <?php $query = "SELECT empresas.nombre, correo, nit, direccion, puntajes.puntaje,descripcion,sector_empresarial.nombre as nombre_sector FROM empresas INNER JOIN sector_empresarial  ON empresas.id_sector = sector_empresarial.id INNER JOIN puntajes on puntajes.id_empresa = empresas.id ORDER BY fecha_registro LIMIT 1";
        $resultado = $f->ejecutarQuery($query); ?>

        <?php while ($fila = mysqli_fetch_assoc($resultado)) { 
            $img = $fila['nit']."/img/"."300_".$fila['nit'].".png"; 
            ?>
            <div class="card card-empresa">
                <span></span>
                <div class="card-body row">
                    <div class="col-md-3 my-3">
                        <div class="card-logo text-center">
                            <img src="store/empresas/<?php echo $img ?>">
                        </div>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <p class="h5-responsive">
                            <?php echo $fila["nombre"]; ?>
                            <span class="badge badge-pill bg-pagina"><?php echo $fila['puntaje']; ?></span>
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
        <?php } ?>
    </div>

    <div class="d-flex offset-md-1 col-md-5 d-flex align-items-center">
        <h3 class="card card-header h3-responsive">
         <i class="fa fa-star fa-2x m-2 text-center"></i>
     La mejor puntuada</h3>
 </div>

</div>
</section>
<?php require 'footer.php'; ?>
</body>
</meta>
</meta>
</html>
