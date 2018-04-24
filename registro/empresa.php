<?php 
session_start(); 
require '../php/Funciones.php';
$func = new Funciones();
?>

<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registro | TuraOnline.co</title>
  <!-- Bootstrap core CSS -->
  <link href="../vendor/mdb-bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="../vendor/mdb-bootstrap/css/mdb.min.css" rel="stylesheet">
  <link href="../vendor/foundation-icons/foundation-icons.css" rel="stylesheet">
  <link href="../vendor/sweetalert/css/sweetalert2.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../vendor/jquery/jquery-ui.theme.min.css">
  <link rel="stylesheet" type="text/css" href="../vendor/jquery/jquery-ui.structure.min.css">
  <link href="../css/login_registro.css" rel="stylesheet">
</head>

<body>

  <section class="container"><!-- Container Principal -->

    <div class="form-responsive registro form color">
      <div class="section-padding">
              <a href="../index.php"><i class="fi-home"></i> Volver a Inicio</a>
      </div>

      <div class="col">
        <form  id="form_registro_empresas" class="text-center" action="../php/registro.php?r=empresa" 
       method="post">
        <div class="titulo-registro">
          <h3>Formulario de Registro</h3>
          <h6 class="text-muted">-para empresas-</h6>
      </div>    
      <div class="form-row">
        <div class="col-8">
          <input type="text" id="nombre" maxlength="45" name="nombre" class="form-control" placeholder="Nombre Empresa">
        </div>
        <div class="col">
          <input type="text" id="sector" maxlength="45" name="sector" class="form-control" placeholder="Sector Empresa">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
          <input type="email" maxlength="45" id="correo"  name="correo"  class="form-control" placeholder="Correo">
        </div>
          <div class="col">
          <input type="text" minlength="7" maxlength="10" id="telefono"  name="telefono"  class="form-control" placeholder="Numero de Teléfono">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col">
          <input type="password" minlength="8" maxlength="15" id="contrasena" name="contrasena"  class="form-control" placeholder="Contraseña">
        </div>
            <div class="col">
          <input type="password" minlength="8" maxlength="15" id="contrasena_verificacion" class="form-control" placeholder="Confirmar Contraseña">
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="col-4">
          <input type="text" maxlength="15" id="nit"  name="nit"  class="form-control" placeholder="NIT">
        </div>
        <div class="col-2">
          <input type="text" maxlength="1" id="verificaion"  name="verificacion"  class="form-control" placeholder="Ver">
        </div>
        <div class="col">
          <input type="text" maxlength="45" id="direccion"  name="direccion"  class="form-control" placeholder="Direccion">
        </div>
    </div>
    <div class="section-padding">
          <button type="submit" class="btn btn-registro">Registrar Empresa</button>
    </div>
    </form>   
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="../vendor/jquery/jquery-ui.min.js" type="text/javascript"></script>
  <script src="../vendor/mdb-bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script src="../vendor/mdb-bootstrap/js/mdb.js" type="text/javascript"></script>
  <script src="../vendor/mdb-bootstrap/js/popper.min.js" type="text/javascript"></script>
  <script src="../vendor/sweetalert/js/sweetalert2.js" type="text/javascript"></script>
  <script src="../vendor/email-autocomplete/jquery.email-autocomplete.js" type="text/javascript"></script>
  <script src="../js/registro.js" type="text/javascript"></script>
  <script src="../js/validar-registro.js" type="text/javascript"></script>
</body>
</html>
