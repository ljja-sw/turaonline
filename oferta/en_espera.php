<?php session_start();
include_once "../php/Funciones.php";
$f = new Funciones();
$id_oferta = 14;
$resultado = $f->ejecutarQuery("SELECT titulo,ofertas.id,aspirantes.nombre,aspirantes.apellido,aspirantes.telefono,
aspirantes.correo FROM ofertas INNER JOIN aspirantes ON ofertas.id_empresa = aspirantes.id_usuario INNER JOIN aspirante_oferta ON aspirante_oferta.id_oferta = ofertas.id WHERE ofertas.id = $id_oferta");
$titulo = "En espera: ".$_SESSION['nombre'];
require "../head.php";
?>

<body>
<div class="container">   
<div class="row">

 <div class="card m-4 mx-auto">

    <div class="card-body">
          <table class="table table-responsive table-inverse">
            <thead>
              <tr>
                <th>Titulo</th>
                <th>Nombre y Apellido</th>
                <th>Teléfono Celular</th>
                <th>Correo</th>
                <th><i class="ml-2 fa fa-check"></i></th>
              </tr>
            </thead>
            <tbody>
        <?php while ($aspirantes = mysqli_fetch_assoc($resultado)){ ?>
              <tr>
                <td><?php echo $aspirantes['titulo']; ?></td>
                <td><?php echo $aspirantes['nombre']." ".$aspirantes['apellido']; ?></td>
                <td><?php echo $aspirantes['telefono']; ?></td>
                <td><?php echo $aspirantes['correo']; ?></td>
                <td><a id="listo" id_oferta="<?php echo $filas['id_oferta']; ?>" id_aspirante="<?php echo $filas['id_aspirante']; ?>" href="#" href="#">Listo</a></td>
              </tr>
        <?php } ?>
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