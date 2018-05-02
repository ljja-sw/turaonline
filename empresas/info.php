<?php 
session_start();
include '../php/Funciones.php';

$funciones = new Funciones();

$empresa = $funciones->datosEmpresa($_GET['id']);
?>

<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

<?php
$titulo = $empresa->getNombre();
require "../head.php";
if (file_exists($empresa->getFavico_empresa())) { ?>
<link rel='shortcut icon' href='<?php echo $empresa->getFavico_empresa() ?>'>
<?php } ?>

<link rel="stylesheet" type="text/css" href="/css/empresas.css">
<body>

<?php require "../navbar.php";?>

<section class="bg-info">
    	<div class="container">
    		<div class="card cabecera-info">
             <img class="img-fluid img-cabecera" src="<?php echo $empresa->getLogo_empresa() ?>">
             <div class="card-body text-center">
                <h1 class="font-weight-bold"><?php echo $empresa->getNombre(); ?></h1>
                <h6><?php echo $empresa->getSector().", ".$empresa->getDireccion(); ?></h6>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row justify-content-center">
        <ul class="nav nav-tabs nav-pills nav-fill" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="tab-resumen" data-toggle="tab" href="#resumen" role="tab" aria-controls="resumen" aria-selected="true">Resumen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-calificaciones" data-toggle="tab" href="#calificaciones" role="tab" aria-controls="calificaciones" aria-selected="false">Califinaciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-ofertas" data-toggle="tab" href="#ofertas" role="tab" aria-controls="ofertas" aria-selected="false">Ofertas de Trabajo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-contacto" data-toggle="tab" href="#contacto" role="tab" aria-controls="contacto" aria-selected="false">Contacto</a>
        </li>
    </ul>
</div>
</section>

<section class="container">

<<<<<<< HEAD

=======
    <div class="row tab-content" id="myTabContent">
      <div class="container tab-pane fade show active" id="resumen" role="tabpanel" aria-labelledby="tab-resumen">
        <div class="row">
            <h1>Resumen</h1>
        </div>
        <div class="row">
            <p>Aqui va el resumento de todo eso.</p>
        </div>
    </div>

    <div class="container tab-pane fade" id="calificaciones" role="tabpanel" aria-labelledby="tab-calificaciones">
        <div class="row">
            <h1>Calificaciones</h1>
        </div>
        <div class="row">
            <p>Son las opiniones y todo eso.</p>
        </div>
    </div>

    <div class="container tab-pane fade" id="ofertas" role="tabpanel" aria-labelledby="tab-ofertas">
        <div class="row">
            <h1>Ofertas</h1>
        </div>
        <div class="row">
            <p>La ultimas ofertas publicadas.</p>
        </div>
    </div>

    <div class="container tab-pane fade container" id="contacto" role="tabpanel" aria-labelledby="tab-contacto">
        <div class="row">
            <h1>Contacto</h1>
        </div>
        <div class="row">
            <p>Numero de telefono y todo eso.</p>
        </div>
    </div>

</div>

</section>

<?php include "../footer.php" ?>
</body>

</html>
