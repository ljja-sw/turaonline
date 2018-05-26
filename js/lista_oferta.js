$(document).ready(function() {

  // Comprobacion usando .prop()
  if ($('#check1').prop('checked') ) {
    console.log("seleccionado");
  }
  // Comprobacion usando .attr()
  if ($('#check2').attr('checked') ) {
    console.log("seleccionado");
  }
  if ($('#check3').attr('checked') ) {
    console.log("seleccionado");
  }
  if ($('#check4').attr('checked') ) {
    console.log("seleccionado");
  }
  if ($('#check5').attr('checked') ) {
    console.log("seleccionado");
  }

  // Comprobacion usando funcion .is()
  /*if ($('#check3').is(':checked') ) {
    console.log("Checkbox seleccionado");
  }*/

  // Comprobar cuando cambia un checkbox
  $('input[type=checkbox]').on('change', function() {
      if ($(this).is(':checked')) {
        var CheckSeleccionados = new Array();

        $('input[type=checkbox]:checked').each(function() {
          CheckSeleccionados.push($(this).val());
        });
        alert("Has seleccionados => " + CheckSeleccionados);
      }else{
        alert($(this).val());
      }
  });

});
