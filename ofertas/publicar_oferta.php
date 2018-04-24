<?php session_start();
if (!isset($_SESSION['nit'])) {
   header('Location: ' ."../index.php", true, 302);
   die();}?>

<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<?php
$titulo = "Publicar Oferta";
require "../head.php" ?>
   <link rel="stylesheet" type="text/css" href="../css/ofertas.css">
<body>
 <?php include '../navbar.php';?>
  
  <div class="container">
  	<div class="row">
  		
  	</div>
  </div>
 
 <?php include '../footer.php'; ?>
  </body>
</html>
