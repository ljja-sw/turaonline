<?php session_start();
include_once "../php/Funciones.php";
$f = new Funciones();
$id_oferta = $_GET['o'];
$resultado = $f->ejecutarQuery("SELECT titulo,ofertas.id,ofertas.estudios,ofertas.experiencia,ofertas.salario,ofertas.jornadaLaboral,ofertas.tipoContrato,empresas.nombre,empresas.nit,ofertas.descripcion FROM ofertas INNER JOIN empresas ON ofertas.id_empresa = empresas.id WHERE ofertas.id = $id_oferta");
$oferta = mysqli_fetch_assoc($resultado);
$titulo = "Aplicando a: ".$oferta['titulo'];
require "../head.php";
?>

<body>
<div class="container">   
<div class="row">
	<!-- card content-->
      <div class="card m-4 mx-auto">

        <div class="card-body">
          <h2 class="pl-3 my-4 text-bold"><?php echo $oferta['titulo']; ?></h2>

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
        <div class="card-footer d-flex justify-content-center flex-wrap">
        	<div class="p-2">
        		<button id="aplicar_oferta" id_oferta="<?php echo $oferta['id'] ?>" type="button" nit_empresa="<?php echo $oferta['nit'] ?>" class="btn btn-pagina">Aplicar</button>
          		<button id="atras" type="button" class="btn btn-outline-pagina">Cancelar</button>
        	</div>
        	<div class="my-1 p-2">
        		<p>¿No estas seguro?<br><a href="../empresas/info.php?id=<?php echo $oferta['nit'] ?>" target="_blank"><i class="fa fa-briefcase prefix"></i> Revisa el Perfíl de esta <strong>Empresa</strong></a></p>	
        	</div>
        </div>
  </div>
</div>      
</div>
<?php include '../footer.php'; ?>
<script type="text/javascript" src="../js/ofertas.js"></script>
</body>
</html>