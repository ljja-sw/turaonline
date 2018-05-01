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
                        <h3>777</h3>
                        <p>Empresas registradas</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h3>1414</h3>
                        <p>Publicaciones ralizadas</p>
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
