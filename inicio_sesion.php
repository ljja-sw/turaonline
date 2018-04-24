<?php 
    if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
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
    <title>Inicio de Sesión | TuraOnline.co</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/mdb-bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="../vendor/mdb-bootstrap/css/mdb.min.css" rel="stylesheet">
    <link href="vendor/sweetalert/css/sweetalert2.css" rel="stylesheet">
    <link href="../css/login_registro.css" rel="stylesheet">
  </head>

<body>

    <section class="container"><!-- Container Principal -->
    <div class="form-responsive form color login">
    <div class="col">
<form class="text-center" id="form_login" action="../php/login.php?l=aspirante" method="post">
  <h2 class="titulo-login text-center">Inicio de sesion para <a>Aspirantes</a></h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo Electrónico/Cédula</label>
    <input type="text" class="form-control" id="inputCorreo" name="inputCorreo" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="inputContrasenia" name="inputContrasenia">
  </div>
  <br>
  <small id="emailHelp" class="form-text">¿No estás registrado? <a href="registro/aspirante.php">Regístrate aquí</a></small>

    <small id="emailHelp" class="form-text">¿Iniciar sesion como empresa? <a href="login_empresa.php" class="cursor-dedo" data-dismiss="modal">Haz click aquí</a></small>
    <br>
  <button type="submit" class="btn btn-login btn-lg">Iniciar Sesión</button>
</form>


          </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/mdb-bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/sweetalert/js/sweetalert2.js" type="text/javascript"></script>
    <script src="js/login.js"></script>
  </body>
</html>