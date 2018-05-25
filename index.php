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
        
    </div>
</section>
<?php require 'footer.php'; ?>
</body>
</meta>
</meta>
</html>
