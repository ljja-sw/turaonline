  <head>
    <!DOCTYPE html>
    <html lang="es">
    <meta charset="utf-8">
    <meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $titulo ?> | TuraOnline</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/mdb-bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/vendor/mdb-bootstrap/css/mdb.min.css" rel="stylesheet">
    <!-- Sweetalert2 CSS -->
    <link href="/vendor/sweetalert/css/sweetalert2.css" rel="stylesheet"/>
    <!-- Boostrap date picker-->
    <link rel="stylesheet" href="/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <!-- Foundation CSS -->
    <link href="/vendor/fontawesome/fontawesome-all.min.css" rel="stylesheet"/>
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet"/>
    <link href="/css/colores.css" rel="stylesheet"/>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://placehold.jp/16x16.png?text=P">
    <link rel="apple-touch-icon" href="http://placehold.jp/57x57.png?text=P">
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.jp/72x72.png?text=P">
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.jp/114x114.png?text=P">
</head>

<?php include 'modals/buscar.php'; 
include 'modals/publicar_hv.php';
include 'modals/mostrar_oferta.php';
?>

<?php 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {

  if(isset($_SESSION["nit"])){ ?>

      <nav class="navbar navbar-expand-lg navbar-dark bg-pagina">
        <div class="container-fluid">
          <a class="navbar-brand float-center " href="../index.php"> <img class="logo" src="../img/brand.png">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav m1-auto align-items-center">
                <li class="nav-item">
                  <a class="nav-link  cursor-dedo" href="../empresas.php"><i class="fa fa-briefcase prefix"></i> Empresas</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link  cursor-dedo" href="../ofertas.php"><i class="fa fa-tasks prefix"></i> Ofertas de Trabajo</a>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#buscar"><i class="fa fa-search"></i> Buscar</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../mi/empresa.php#cuadrito"><i class="fa fa-indent"></i>
              Publicar Oferta</a>
          </li>
          <li class="nav-item">
              <a href="../mi/empresa.php">
                <img class="cursor-dedo img-fluid avatar" id="blah" src="<?php echo $_SESSION["avatar"]; ?>" alt="Mi Foto"/>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link cursor-dedo" data-toggle="modal" id="cerrar_sesion">
            <span data-toggle="tooltip" title="Cerrar sesión" class="oi oi-account-logout"></span>
        Cerrar Sesión</a>
    </li>
</ul>
</div></div></nav>

<?php }else if(isset($_SESSION["cedula"])){ ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-pagina">
      <div class="container-fluid">
        <a class="navbar-brand float-center " href="../index.php"> <img class="logo" src="../img/brand.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav m1-auto align-items-center">
              <li class="nav-item">
                <a class="nav-link cursor-dedo" href="../empresas.php"><i class="fa fa-briefcase prefix"></i> Empresas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link cursor-dedo" href="../ofertas.php"><i class="fa fa-tasks prefix"></i> Ofertas de Trabajo</a>
            </li>
            <li class="nav-item">
             <a class="nav-link cursor-dedo" data-toggle="modal" data-target="#myModal"><i class="fa fa-align-left prefix"></i>Publicar HV</a>
         </li>
     </ul>
     <ul class="navbar-nav ml-auto align-items-center">
      <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#buscar"><i class="fa fa-search"></i> Buscar</a>
      </li>
      <li class="nav-item">
        <a href="../mi/perfil.php">
          <img class="cursor-dedo img-fluid avatar" id="blah" src="<?php echo $_SESSION["avatar"]; ?>" alt="Mi Foto"/></a>
      </li>
      <li class="nav-item">
          <a class="nav-link cursor-dedo" data-toggle="modal" id="cerrar_sesion">
            <span data-toggle="tooltip" title="Cerrar sesión" class="oi oi-account-logout"></span>
        Cerrar Sesión</a>
    </li>
</ul>
</div></div></nav>

<?php }}else { ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-pagina">
      <div class="container-fluid">
        <a class="navbar-brand float-center " href="../index.php"> <img class="logo" src="../img/brand.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav m1-auto align-items-center">
              <li class="nav-item">
                <a class="nav-link cursor-dedo" href="../empresas.php"><i class="fa fa-briefcase prefix"></i> Empresas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link cursor-dedo" href="../ofertas.php"><i class="fa fa-tasks prefix"></i> Ofertas de Trabajo</a>              </li>
            </ul>
            <ul class="navbar-nav ml-auto align-items-center">
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#buscar"><i class="fa fa-search"></i> Buscar</a>
                  <li class="nav-item">
                    <a class="nav-link float-center cursor-dedo" href="../inicio_sesion.php">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link float-center cursor-dedo" href="../registro/aspirante.php">Registrarse</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php } ?>    