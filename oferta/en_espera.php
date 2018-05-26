<?php session_start();
include_once "../php/Funciones.php";
$f = new Funciones();
$id_empresa = $_SESSION['id_empresa'];
$resultado = $f->ejecutarQuery("SELECT titulo,hv_aspirantes.directorio,ofertas.id,aspirantes.nombre,aspirantes.apellido,aspirantes.telefono,aspirante_oferta.id_oferta,aspirante_oferta.id_aspirante, aspirantes.correo FROM ofertas INNER JOIN aspirantes ON ofertas.id_empresa = aspirantes.id_usuario INNER JOIN aspirante_oferta ON aspirante_oferta.id_oferta = ofertas.id INNER JOIN hv_aspirantes ON hv_aspirantes.id_aspirante = aspirante_oferta.id_aspirante WHERE ofertas.id_empresa = $id_empresa AND estado_aspirante = 'En Espera'");
$titulo = "En espera: ".$_SESSION['nombre'];
require "../head.php";
?>

<body>
<div class="container">   

<div class="row">

 <div class="card m-4 mx-auto">

  <div class="card bard-header m-4 p-2 text-center bg-pagina text-white text-bold">
    <i class="fa fa-clock fa-2x p-1"></i>
    <h3>En Espera</h3>
  </div>

    <div class="card-body">
          <table class="table table-responsive table-inverse">
            <thead>
              <tr>
                <th>Titulo</th>
                <th>Nombre y Apellido</th>
                <th>Teléfono Celular</th>
                <th>Correo</th>
                <th>Hoja de Vida <i class="fa fa-pdf"></i></th>
                <th><i class="ml-2 fa fa-check"></i></th>
              </tr>
            </thead>
            <tbody>
<?php if (mysqli_num_rows($resultado)  > 0): ?>
          <?php while ($aspirantes = mysqli_fetch_assoc($resultado)){ ?>
              <tr>
                <td><?php echo $aspirantes['titulo']; ?></td>
                <td><?php echo $aspirantes['nombre']." ".$aspirantes['apellido']; ?></td>
                <td><?php echo $aspirantes['telefono']; ?></td>
                <td><?php echo $aspirantes['correo']; ?></td>
                <td><a href="<?php echo $aspirantes['directorio']; ?>" target="_popout">Ver</a></td>
                <td><a class="listo" id_oferta="<?php echo $aspirantes['id_oferta']; ?>" id_aspirante="<?php echo $aspirantes['id_aspirante']; ?>" href="#" href="#">Listo</a></td>
              </tr>
        <?php } ?>
<?php else: ?>
              <tr>
                <td> --- </td>
                <td> --- </td>
                <td> --- </td>
                <td> --- </td>
                <td> --- </td>
                <td> --- </td>
              </tr>
<?php endif ?>
            </tbody>
          </table>
    </div>
  </div>      
</div>
</div>
<?php include '../footer.php'; ?>
<script type="text/javascript" src="../js/ofertas.js"></script>
</body>
</html>