$(document).ready(function() {//Open

$('#form_registro_aspirantes').on('submit', function(e) {
  e.preventDefault()
  if (registroAspirantes()){
  var action = this.action;
  var form_data = new FormData(this);
$.ajax({
    url : action,
    type: "post",
    data : form_data,
    contentType: false,
    cache: false,
    processData:false,
    beforeSend: function(obj) {
  },success: function (response) {
    swal({
      title: response,
      type: 'success',
      showConfirmButton: true}).then((result) => {
        $(location).attr('href', '../index.php')});
  },error : function (xhr, ajaxOptions, thrownError) {
    swal({
      title: thrownError,
      type: 'error',
      showConfirmButton: true})}
  })
  }else{
    e.preventDefault()
  }
  })

$('#form_registro_empresas').on('submit', function(e) {
  e.preventDefault()
  if (registroEmpresa()){
  var action = this.action;
  var form_data = new FormData(this);
$.ajax({
    url : action,
    type: "post",
    data : form_data,
    contentType: false,
    cache: false,
    processData:false,
    beforeSend: function(obj) {
  },success: function (response) {
    swal({
      title: response,
      type: 'success',
      showConfirmButton: true}).then((result) => {
        $(location).attr('href', '../index.php')});
  },error : function (xhr, ajaxOptions, thrownError) {
    swal({
      title: thrownError,
      type: 'error',
      showConfirmButton: true})}
  })
  }else{
    e.preventDefault()
  }
  })

$("#correo_d,#correo").emailautocomplete({
  suggClass: "custom-classname",
  domains: ["gmail.com","hotmail.com","outlook.com","hotmail.es"]
});

$("#confirmacion_contrasenia").keyup(function(){
  if ( $("#contrasenia_d").val() != $(this).val() ) {
    $(this).css({"border-bottom": "1px solid #720e07","box-shadow": "0px 1px 0px 0px #720e07"})
  }else{
    $("#confirmacion_contrasenia").css(
      {"border-bottom": "1px solid #60a561","box-shadow": "0px 1px 0px 0px #60a561"}
    )
  }
})
});//Close