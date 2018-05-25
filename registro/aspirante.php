<?php session_start(); ?>
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
  <link href="/vendor/mdb-bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="/vendor/mdb-bootstrap/css/mdb.min.css" rel="stylesheet">
  <link href="/vendor/foundation-icons/foundation-icons.css" rel="stylesheet">
  <link href="/vendor/sweetalert/css/sweetalert2.css" rel="stylesheet">
  <link href="/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" >
  <link href="/css/login_registro.css" rel="stylesheet">
</head>

<body>
 
  <section class="container"><!-- Container Principal -->
<div class="row">
    <div class="col form-responsive registro form">

      <div class="section-padding">
        <a href="/index.php" ><i class="fi-home"></i> Volver a Inicio</a>
      </div>

      <div class="col">
        <form autocomplete="off" id="form_registro_aspirantes" class="text-center" action="/php/registro.php?r=aspirante" 
        method="post">
        <div class="titulo-registro">
          <h3>Formulario de Registro</h3>
          <h6 class="text-muted">-para aspirantes-</h6>
        </div>

        <div class="form-row">
          <div class="col-md">
            <input type="text" name="nombre_d" id="nombre_d" class="form-control" placeholder="Nombres">
          </div>
          <div class="col-md">
            <input type="text" name="apellido_d" id="apellido_d" class="form-control" placeholder="Apellidos">
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-9">
            <input type="email" name="correo_d" id="correo_d" class="form-control" placeholder="Correo">
          </div>
          <div class="col-md-3 my-4">
            <select class="custom-select" id="sexo" name="sexo">
              <option value="masculino">Hombre</option>
              <option value="femenino">Mujer</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md">
            <input type="text" name="cedula_d" id="cedula_d" class="form-control" placeholder="Cédula">
          </div>
          <div class="col-md">
            <input type="text" name="numero_tel_d" id="numero_tel_d" class="form-control" placeholder="Numero de Teléfono">
          </div>
        </div>

        <div class="form-row">
          <div class="col-md">
            <input type="password" name="contrasenia_d" id="contrasenia_d" class="form-control" placeholder="Contraseña">
          </div>
          <div class="col-md">
            <input type="password" name="confirmacion_contrasenia" id="confirmacion_contrasenia" class="form-control" placeholder="Confirmar Contraseña">
          </div>
        </div>

        <div class="form-row">
          <div class="col-md">
            <input type="text" name="direccion_d" id="direccion_d" class="form-control" placeholder="Direccion">
          </div>
          <div class="col-md">
            <input type="text" name="fecha_nacimiento_d" id="fecha_nacimiento_d" class="form-control" placeholder="Fecha de Nacimiento">
          </div>
        </div>
        <small class="form-text">¿Deseas registrar una empresa? <a class="cursor-dedo" href="empresa.php">Hazlo aquí</a></small>
        <div class="section-padding">
          <button type="submit" id="registrar_desempleado" class="btn btn-registro">Registrarse</button>            
        </div>     
      </form>        
      </div>
    </div>
  </div>
  </section>
  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="/vendor/mdb-bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script src="/vendor/mdb-bootstrap/js/mdb.js" type="text/javascript"></script>
  <script src="/vendor/mdb-bootstrap/js/popper.min.js" type="text/javascript"></script>
  <script src="/vendor/sweetalert/js/sweetalert2.js" type="text/javascript"></script>
  <script src="/vendor/email-autocomplete/jquery.email-autocomplete.js" type="text/javascript"></script>
  <script src="/js/registro.js" type="text/javascript"></script>
  <script src="/js/validar-registro.js" type="text/javascript"></script>
  <script src="/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
  <script src="/vendor/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js" type="text/javascript"></script>
  <script src="/vendor/input-mask/jquery.inputmask.js"></script>
  <script src="/vendor/input-mask/jquery.inputmask.phone.extensions.js"></script>

  <script type="text/javascript">
  $('#fecha_nacimiento_d').datepicker({    
    format: 'dd/mm/yyyy',
    autoclose: true,
    language: 'es'})

  $("#numero_tel_d").inputmask('999-999-9999')
  </script>

</body>
</html>
