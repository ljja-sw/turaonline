<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

<?php
$titulo = "Empresa #1";
require "../head.php";?>
<link rel="stylesheet" type="text/css" href="../css/empresas.css">

<body>

    <?php require "../navbar.php";?>

<section class="fondo-dinamico">
    	<div class="container">
    		<div class="card cabecera-info">
               <img class="img-fluid img-cabecera" src="http://placehold.jp/500x500.png?text=Logo+Empresa">
               <div class="card-body text-center">
                <h1>Empresa #1</h1>
                <h6 class="text-muted">Sector, DIreccion</h6>
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
                <a class="nav-link" id="tab-contacto" data-toggle="tab" href="#contacto" role="tab" aria-controls="contacto" aria-selected="false">Contanto</a>
            </li>
        </ul>
    </div>
</section>

<section class="container">

    <div class="row">
        <div class="tab-content" id="myTabContent">
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

</div>

</section>



<?php include "../footer.php" ?>
</body>

</html>
