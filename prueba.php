<!DOCTYPE html>
<html>
<?php include "head.php" ?>
<link rel="stylesheet" href="pruebas/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">


<body>
	<?php require 'modals/publicar_oferta.php' ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#publicar_oferta">
    modal
</button>

<?php include "footer.php" ?>
<script src="pruebas/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="pruebas/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js"></script>

<script type="text/javascript">
	$('#datepicker').datepicker({    
		format: 'dd/mm/yyyy',
		autoclose: true,
		language: 'es'})
</script>
</body>
</html>


