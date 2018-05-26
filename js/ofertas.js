/*$(document).ready(function() {

$("#aplicar_oferta").click(function(e){
	swal({
  title: "¿Deseas aplicar a esta Oferta de Trabajo?",
  type: 'question',
  showCancelButton: true,
  cancelButtonText: "Cancelar",
  confirmButtonColor: '#003459',
  confirmButtonText: 'Aceptar',
  footer: '<a href>Why do I have this issue?</a>'
}).then((result) => {
  if (result.value) {
    var id_oferta = $(this).attr("id_oferta")
	$.ajax({
    	url: "../php/aplicar_oferta.php",
    	type: "POST",
    	data: {id_oferta:id_oferta},
    	success: function(response){
        	swal({
            	type: 'success',
            	text: response,
            	title: "Exito",
            	showConfirmButton: true,
            }).then((result) => {
              $(location).attr('href', '../index.php')
            });
    },
    error: function (xhr, ajaxOptions, thrownError){
                swal({
              type: 'error',
              title: thrownError,
              showConfirmButton: true,
            });
    }
   });
  }
})
});


});//Close JQuery*/