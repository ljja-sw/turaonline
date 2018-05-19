<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<?php
$titulo = "Inicio";
require "head.php" ?>
<link href="../css/index.css" rel="stylesheet"/>

<body>
    <?php 
    require 'navbar.php';
    ?>

    <section class="container-fluid padding cabecera">
        <div class="row">

            <div class="col-md-10 my-3">
                <!--Carousel Wrapper-->
                <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-2" data-slide-to="1"></li>
                        <li data-target="#carousel-example-2" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="view">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                                <div class="mask rgba-black-light"></div>
                            </div>
                            <div class="carousel-caption">
                                <h3 class="h3-responsive">Light mask</h3>
                                <p>First text</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
                                <div class="mask rgba-black-strong"></div>
                            </div>
                            <div class="carousel-caption">
                                <h3 class="h3-responsive">Strong mask</h3>
                                <p>Secondary text</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                                <div class="mask rgba-black-slight"></div>
                            </div>
                            <div class="carousel-caption">
                                <h3 class="h3-responsive">Slight mask</h3>
                                <p>Third text</p>
                            </div>
                        </div>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
                

            </div>

            <div class="col-md-2 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h3>0</h3>
                        <p>Empresas registradas</p>
                    </div>
                </div>

<<<<<<< HEAD
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
                            <?php echo $fila["nombre"]; ?><br>
                            <small>Puntaje: <?php echo $fila['puntaje']; ?>/5</small>
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
=======
                <div class="card">
                    <div class="card-body">
                        <h3>0</h3>
                        <p>Publicaciones ralizadas</p>
>>>>>>> 34eb8955893ae5fed05deb49cabc323244006583
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="row">
      
            <div class="col-md-12">
                    
            </div>
        
        </div>
    </section>
    
   <?php require 'footer.php'; ?>

</body>
</html>
