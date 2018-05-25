<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

<?php
$titulo = "Mi Perfíl";
require "../head.php";
require_once "../php/Funciones.php";

$f = new Funciones();
if ( $_SESSION["loggedin"] != true ) {
 header("Location: ../index.php");}?>
 <link rel="stylesheet" type="text/css" href="/css/perfil.css">   

 <body>
  <?php require "../navbar.php";?>

  <section class="fondo-cabecera padding mb-4">
    <section class="container cabecera"><!-- Container Principal -->
      <div class="card card-cabecera"><!-- Card prefil -->
        <div class="card-body">

          <div class="row align-items-center">
            <div class="div-foto col-md-5 col-sm-5">

              <form id="form_cambiar_foto" action="../php/cambiar_foto.php?c=foto_perfil" method="post" enctype="multipart/form-data">
                <input type='file' id="img_perfil" name="img_perfil" accept="image/*" onchange="readURL(this);" />
                <img onclick="$('#img_perfil').click();" class="cursor-dedo fluid-img" id="foto_perfil" src="<?php echo $_SESSION['gr'] ?>" alt="your image" />
                <button id="cambiar_foto" class="btn btn-primary hidden">Listo</button>
              </form>

            </div>

            <div class="col-md-7 col-sm-7 text-center">
              <p class="h1-responsive"><?php echo $_SESSION["nombres"]." ".$_SESSION["apellidos"] ?></p>
              <h5><b>Cédula:</b> <?php echo $_SESSION["cedula"]; ?></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <section class="container"><!-- Container Principal -->
    <div class="row"> 

    <div class="col-md-5"> <!-- Informacion Aspirante -->
      <div class="card"><!--Card-->

        <div class="card-header principal">
          <h4><strong>Información</strong></h4>
        </div>

        <div id="panel_informacion" class="card-body">
          <div id="info">
            <?php require("../ajax/informacion_aspirante.php") ?>
          </div>
          <form id="form_info" type="POST"></form>
        </div>

        <div class="card-footer">
          <div id="div-btn-info"></div>
          <a href="#" id="editar-info">Editar</a>
        </div>

      </div><!-- Card -->
    </div><!-- Informacion Aspirante -->

    <div class="col-md-7 my-auto"> <!-- Perfil laboral-->
      <div class="card"><!--Card -->
        <div class="card-header principal">
          <h4><strong>Perfil laboral</strong></h4>
        </div>
        <div class="card-body">

          <div id="perfil-laboral">
            <?php require "../ajax/perfil_laboral.php" ?>
          </div>

          <form id="cambiar-perfil" class="input-group hidden">
            <!-- Form generada por JQyery es insertada aquí -->
          </form>

        </div>
        <div class="card-footer">
          <div id="btn-listo"></div>
          <a href="#" id="editar-pl">Editar</a>
        </div>
      </div><!-- Card -->
    </div><!-- Perfil laboral-->

    <div class="col-md-6 col-sm-12 mx-auto"> <!-- Hoja de Vida -->
      <div class="card"><!-- Hoja de Vida -->

        <div class="card-header">
          <h4><strong>Publicar Hoja de Vida</strong><i class="fa fa-address-card float-right"></i></h4>
        </div>
        
        <div class="card-body">

          <form id="form-hv"  class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="text-center">
                
                <input id="archivo_hv" name="hv" class="hidden"  type="file" />
                
                <a class="small btn btn-pagina" id="div-archivo" onclick="$('#archivo_hv').click();">
                  <i class="fa fa-upload"></i><br>
                  Seleccionar Archivo
                </a>
                                <p class="small">Tamaño Máximo <b>2048KB aprx</b> </p>
<br>
              <p>Ultima actualización: <?php 
                  $r = $f->ejecutarQuery("SELECT fecha_carga,directorio from hv_aspirantes where id_aspirante =".$_SESSION['id_usuario']);
                  $fila = mysqli_fetch_assoc($r);
                  echo $fecha = ($fila['fecha_carga'] == "") ? "Nunca" :  $f->tiempo($fila['fecha_carga']) ;
               ?><br>Ver Hoja de Vida: <a href="<?php echo $fila['directorio']?>" target="_blank">Aqui</a></p>
                

              <div id="subir" class="hidden">
                <p>Nombre Archivo</p>
                <button id="btn-subir-hv"  class="btn btn-primary" type="submit"><i class="fa fa-upload"></i> Subir</button>
              </div>

            </div>
          </form>

          <hr>
          <p class="text-muted text-center">Descarga la plantilla de <strong>Hoja de Vida</strong><a href="../store/default/pantilla_hv.docx"> aqui <i class="fa fa-cloud-download-alt"></i></a></p>
        </div>

      </div><!-- Card -->
    </div><!-- Col -->

  </div>
</section>
<?php include "../footer.php" ?>
<script src="../js/mi.js" type="text/javascript"></script>
</body>
</html>
