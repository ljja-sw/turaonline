<?php 
session_start();

$titulo = "Mi Empresa";
require "../head.php";

if ( $_SESSION["loggedin"] != true|| !isset($_SESSION['nit'])) {
   header("Location: ../index.php");
}?>

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

          <section class="container py-3"><!-- Container Principal -->
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

              <div class="col-md-6" id="cuadrito"> <!-- Col -->
                <div class="card"><!--Card -->
                  <div class="card-header">
                    <h4><strong>Publica tu oferta</strong></h4>
                  </div>

                  <form id='publicarOferta' action="../php/registrar_ofertas.php" method="post">
                  <div class="card-body">
                    <input id="nom_oferta" type="text" class="form-control" name="nom_oferta" placeholder="Nombre de Oferta" required>
                    <div class="form-group">
                      <label for="comment">Descripción:</label>
                      <textarea class="form-control" rows="5" name="descripcion" id="descripcion" required></textarea>
                    </div>
                    <input id="estudios" type="text" class="form-control" name="estudios" placeholder="Estudios requeridos" required>
                    <input id="experiencia" type="text" class="form-control" name="experiencia" placeholder="Tiempo de experiencia" required>
                    <input id="salario" type="text" class="form-control" name="salario" placeholder="Salario" required>
                    <div class="form-group">
                      <div class="col-xs-5 selectContainer">
                          <select class="form-control" name="tcontrato" id="tcontrato" required>
                              <option value="">--Tipo de contrato--</option>
                              <option value="Obra o Labor">Contrato de Obra o labor</option>
                              <option value="Termino Indefinido">Contrato a término indefinido</option>
                              <option value="Termino Fijo">Contrato a término fijo</option>
                              <option value="Prestacion de Servicios">Contrato civil por prestación de servicios</option>
                              <option value="Aprendizaje">Contrato de aprendizaje</option>
                              <option value="Ocacional">Contrato ocasional de trabajo</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-5 selectContainer">
                          <select class="form-control" name="tjornada" id="tjornada" required>
                              <option value="">--Tipo de jornada laboral--</option>
                              <option value="Tiempo Completo">Tiempo Completo</option>
                              <option value="Tiempo Parcial">Tiempo Parcial</option>
                              <option value="Por Horas">Por Horas</option>
                              <option value="Beca Practicas">Beca/prácticas</option>
                          </select>
                      </div>   
                    </div>
                    <div class="form-group">
                      <div class="col-xs-5 selectContainer">
                          <select class="form-control" name="decaracter" required>
                              <option value="">--De Caracter--</option>
                              <option value="Normal">Normal</option>
                              <option value="Urgente">Urgente</option>
                          </select>
                      </div>   
                    </div>
                  </div>
                    <div class="card-footer">
                      <button  class="float-right btn btn-default" type="submit">Publicar oferta</button>
                    </div>
                  </form>
                </div><!-- Card -->
              </div><!-- Col -->
              
              <div class="col-md-6"> <!-- Col -->
                <div class="card"><!--Card -->
                  <div class="card-header">
                    <h4><strong>Ofertas Publicadas</strong></h4>
                  </div>
                  <div class="card-body">
                    <?php include '../ajax/ofertas_publicadas.php' ?>
                  </div>
                  <div>
                    <div class="modal-footer">
                        <a type="label" class="nav-link"  href="../oferta/aspirantes.php">Ver Aspirantes</a>
                    </div>
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
