<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

<?php
$titulo = "Mi Empresa";
require "../head.php";

if ( $_SESSION["loggedin"] != true ) {
 header("Location: ../index.php");}?>

 <link rel="stylesheet" type="text/css" href="../css/perfil.css">   
 <body>
  <?php require "../navbar.php";?>


  <section class="fondo-cabecera">

    <section class="container cabecera"><!-- Container Principal -->

      <div class="card card-cabecera"><!-- Card prefil -->
        <div class="card-body">
          <div class="row align-items-center">
            <div class="div-foto col-md-6 col-sm-6">
              <form id="form_cambiar_foto" action="../php/cambiar_foto.php?c=logo" method="post" enctype="multipart/form-data">
                <input type='file' id="img_perfil" name="img_perfil" accept="image/*" onchange="readURL(this);" />
                <img onclick="$('#img_perfil').click();" class="cursor-dedo fluid-img" id="foto_perfil" src="<?php echo $_SESSION['gr'] ?>" alt="Logo" />
                <button id="cambiar_foto" class="btn btn-primary btn-lg btn-block hidden">Listo</button>
              </form>
            </div>

            <div class="div-foto col-md-6 col-sm-6">
              <h2 class="display-responsive-4" id="nombre"><?php echo $_SESSION["nombre"]; ?>
              <h3 id="sector_empresa"><?php echo $_SESSION["sector"]; ?></h3>
                <h6 class="" id="correo"><b>Correo:</b> <?php echo $_SESSION["correo"]; ?></h6>
              </div>

            </section> 

          </section>

          <section class="container padding"><!-- Container Principal -->
            <div class="row">

              <div class="col-md-6"> <!-- Col -->
                <div class="card"><!--Card -->
                  <div class="card-header">
                    <h4><strong>Información de la Empresa</strong></h4>
                  </div>
                  <div class="card-body">
                    <h5><b>Direccion:</b> <?php echo $_SESSION["direccion"]; ?></h5>
                    <h6><b>Teléfono:</b> <?php echo $_SESSION["telefono"]; ?></h6>
                    <h6><b>Correo:</b> <?php echo $_SESSION["correo"]; ?></h6>
                  </div>
                  <div class="card-footer">
                    <a href="#" id="editar-info">Editar</a>
                  </div>
                </div><!-- Card -->
              </div><!-- Col -->

              <div class="col-md-6"> <!-- Col -->
                <div class="card"><!--Card -->
                  <div class="card-header">
                    <h4><strong>Descripcion de la Empresa</strong></h4>
                  </div>
                  <div class="card-body">

                    <div id="desc_empresa">
                      <?php require "../ajax/desc_empresa.php" ?>
                    </div>
                    <form id="cambiar-desc" class="input-group hidden">
                      <!-- Form generada por JQyery es insertada aquí -->
                    </form>

                  </div>
                  <div class="card-footer">
                    <div id="btn-listo"></div>
                    <a href="#" id="editar-desc">Editar</a>
                  </div>
                </div><!-- Card -->
              </div><!-- Col -->

            </div></section>


            <footer>
              <?php include '../footer.php'; ?>
              <script src="../js/mi.js" type="text/javascript"></script>
            </footer>
          </body>
          </html>
