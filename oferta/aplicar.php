<?php session_start();
include_once "../php/Funciones.php";
$f = new Funciones();
$id_oferta = $_GET['o'];
$resultado = $f->ejecutarQuery("SELECT titulo,ofertas.id,ofertas.estudios,ofertas.experiencia,ofertas.salario,ofertas.jornadaLaboral,ofertas.tipoContrato,empresas.nombre,empresas.nit,ofertas.descripcion,aspirante_oferta.estado_aspirante FROM ofertas INNER JOIN empresas ON ofertas.id_empresa = empresas.id WHERE ofertas.id = $id_oferta");
@$oferta = mysqli_fetch_assoc($resultado);
$titulo = "Aplicando a: ".$oferta['titulo'];
require "../head.php";
?>
<body>
  <div class="container">   
    <div class="row">
     <!-- card content-->
     <?php if ($resultado): ?>
      <div class="card m-4 mx-auto">
        <div class="card-body">
          <div class="card bard-header m-4 p-2 text-center bg-pagina text-white text-bold">
            <i class="fa fa-clock fa-2x p-1"></i>
            <h3><?php echo $oferta['titulo']; ?></h3>
          </div>
          <h4 class="text-pagina text-bold">Descripción</h4>
          <p class="pl-3"><?php echo $oferta['descripcion'] ?></p>

          <div class="my-3 pl-2">
            <h5><strong class="text-muted">Estudios</strong><p class="pl-2"><?php echo $oferta['estudios'] ?></p></h5>
            <h5><strong class="text-muted">Experiencia</strong><p class="pl-2"><?php echo $oferta['experiencia'] ?></p></h5>
          </div>  

          <h4 class="texto_negrita text-pagina">Datos</h4>
          <div class="my-3 pl-2">
            <h5><strong class="text-muted">Salario</strong><p class="pl-2"><?php echo $oferta['salario'] ?></p></h5>
            <h5><strong class="text-muted">Jornada</strong><p class="pl-2"><?php echo $oferta['jornadaLaboral'] ?></p></h5>
            <h5><strong class="text-muted">Tipo Contrato</strong><p class="pl-2"><?php echo $oferta['tipoContrato'] ?></p></h5>
          </div>
        </div>
      </div>
      <?php else: ?>
    <div class="card card-body m-5">
  <h1 class="text-center">Ya has aplicado en esta Oferta</h1></div>            
        </div>
      </div>
      <?php endif ?>
    </div>      
  </div>
  <?php include '../footer.php'; ?>
  <script type="text/javascript" src="../js/ofertas.js"></script>
</body>
</html>