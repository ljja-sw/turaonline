$(document).ready(function() {

$('#filtro_sectores a').on('click', function(e){
  e.preventDefault();
  sector = this.id;
    $.ajax({
      url: "../ajax/lista_empresas.php",
      type: "POST",
      data: {sector:sector},
        success: function(response){
          $("#empresas").html(response)
        }
  });
});

  $('#fecha_vencimiento').datepicker({    
    format: 'dd/mm/yyyy',
    autoclose: true,
    language: 'es'});

  $('#cerrar_sesion').on('click', function(e) {
    e.preventDefault();
    swal({
      title: "¿Cerrar Sesión?",
      type: 'question',
      showConfirmButton: true,
      showCancelButton: true,
      confirmButtonText:
      '<i class="oi oi-account-logout"></i> Si!',
      confirmButtonAriaLabel: 'Si',
      cancelButtonText: "Cancelar"
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url :"../php/logout.php",
          type: "POST",
          contentType: false,
          cache: false,
          processData:false
        }).done(function(response){
          $(location).attr('href', '../index.php')
        });
      } else if (
        result.dismiss === swal.DismissReason.cancel) {
      }});});

  $('#form_busqueda').submit(function(e){
    e.preventDefault();
    var busqueda = $("#texto_busqueda").val();
    $(location).attr('href', '../busqueda.php?b='+busqueda)
  });


});//Close JQUery