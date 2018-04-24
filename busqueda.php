<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<?php
$titulo = "Buscando: Panela";
require "head.php"; 
?>

<body>
    <?php require 'navbar.php';  ?>
    <?php $busqueda = $_GET['b'];?>
    
    <section class="container-fluid padding">
        <div class="row">

            <div class="col-md-3">
                <blockquote class="blockquote bq-pagina">
                  <h3 class="bq-title"><i class="fi-page-search"></i><strong> Resultados de:</strong></h3>
                  <h2 class="text-right bq-text"><?php echo $busqueda; ?></h2>
              </blockquote>
              <blockquote class="blockquote bq-pagina">
                  <ul class="nav flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="#empresas" data-toggle="tab" rol="tab">Empresas</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#sectores" data-toggle="tab" rol="tab">Sectores</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#ofertas" data-toggle="tab" rol="tab">Ofertas de trabajo</a>
                    </li>
                </ul>
            </blockquote>
        </div>

        <div class="col-md-8">
            <div class="tab-content">
                <div class="tab-pane fade in show active" id="empresas" role="tabpanel">
                  <h1>Empresas</h1>
                  <div class="resultados">

                  </div>
              </div>
              <div class="tab-pane fade" id="sectores" role="tabpanel">
                <h1>Sectores</h1>
              </div>
              <div class="tab-pane fade" id="ofertas" role="tabpanel">
                  <h1>Ofertas</h1>
              </div>
          </div>
      </div>
  </div>
</section>

<?php require 'footer.php'; ?>
</body>

</html>
