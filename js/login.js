$(document).ready(function() {

$('#form_login').on('submit', function(e) {
e.preventDefault();
var form_data = new FormData(this); //Creates new FormData object
var action = this.action;
$.ajax({
    url : action,
    type: "POST",
    data : form_data,
    contentType: false,
    cache: false,
    processData:false,
    beforeSend: function(obj) {
  },success: function (response) {
    swal({
        title: "Iniciando Sesión",
        type: 'success',
        timer: 2000,
        showConfirmButton: false,
    }).then((result) => {
        $(location).attr('href', '../index.php')});
  },error: function (xhr, ajaxOptions, thrownError) {
  swal({
      title: thrownError,
      type: 'error',
      confirmButtonText: "Entendido",
  }).then((result) => {});
}});});



})