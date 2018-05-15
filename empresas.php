<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control">
<?php
$titulo = "Empresas";
require "head.php";?>
<link href="../css/empresas.css" rel="stylesheet" type="text/css">
<body>
    <?php require "navbar.php";
          require "php/Funciones.php";
    $funciones = new Funciones();
    ?>
    <section class="fondo-carousel padding">
        <div class="container cabecera">
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
                            <img alt="First slide" class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg">
                            <div class="mask rgba-black-light">
                            </div>
                        </img>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">
                            Light mask
                        </h3>
                        <p>
                            First text
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img alt="Second slide" class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg">
                        <div class="mask rgba-black-light">
                        </div>
                    </img>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">
                        Strong mask
                    </h3>
                    <p>
                        Secondary text
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img alt="Third slide" class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg">
                    <div class="mask rgba-black-light">
                    </div>
                </img>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">
                    Slight mask
                </h3>
                <p>
                    Third text
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
</section>
<section class="container">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-4 ">
            <div class="single sectores">
                <div class="panel panel-pagina">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        Sectores</h3>
                    </div>
                    <ul class="list-group" id="filtro_sectores">
                        <a href="#" id="" class="list-group-item"> Ver Todas</a>
                        <?php $resultado = $funciones->ejecutarQuery("SELECT DISTINCT * FROM sector_empresarial");?>
                        <?php while ($sectores = mysqli_fetch_assoc($resultado)) {?>
                            <a href="#" id="<?php echo $sectores['id'] ?>" class="list-group-item"> <?php echo $sectores['nombre'] ?></a>
                        <?php  } ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sidebar -->

        <div class="col-md-8" id="empresas">
            <!--Lista Empresas -->
            <?php include 'ajax/lista_empresas.php';?>
            <!--Fin Lista Empresas -->
        </div>
    </div>
</section>
<?php include "footer.php"?>

</body>
</html>
