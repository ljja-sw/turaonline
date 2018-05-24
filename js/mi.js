
function formatFileSize(bytes,decimalPoint) {
   if(bytes == 0) return '0 Bytes';
   var k = 1000,
       dm = decimalPoint || 2,
       sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
       i = Math.floor(Math.log(bytes) / Math.log(k));
   return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
}

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#foto_perfil')
      .attr('src', e.target.result);};
      reader.readAsDataURL(input.files[0]);
      $('#cambiar_foto').removeClass('hidden');
    }}


$(document).ready(function() {

  $('#form_cambiar_foto').submit(function(e){
    e.preventDefault()
    $.ajax({
      url : this.action,
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false
    }).done(function(response){
      swal({
        title: response,
        confirmButtonText: 'Entendido',
        confirmButtonClass: 'btn btn-success',
        buttonsStyling: true
      }).then((result) => {
        $(location).attr('href', '../index.php')});
    });
  });

  /* JQuery disponibles en la seccion "mi" para los Aspirantes*/
  $("#editar-pl").submit(function(e){
    var perfil_actual = $.trim($("#perfil-laboral").text())
    $("#cambiar-perfil")
    .html("<textarea name='pl' class='form-control' aria-label='Perfil Laboral'>"+perfil_actual+"</textarea>")
    $("#cambiar-perfil").removeClass("hidden")
    $("#perfil-laboral").addClass("hidden")
    $("#btn-listo").html("<button type='submit' id='listo' form='cambiar-perfil' class='btn btn-outline-primary float-right'>Listo</button>")
    $(this).addClass("hidden");
  });

  $("#cambiar-perfil").submit(function(e){
    var form_data = new FormData(this);
    e.preventDefault();
    $.ajax({
      url : "../ajax/perfil_laboral.php?actualizar",
      type: "POST",
      data : form_data,
      contentType : false,
      cache: false,
      processData: false
      ,success: function (response) {
       swal({
        title: "Perfil laboral actualizado",
        type: 'success',
        showConfirmButton: true})
       $("#cambiar-perfil").addClass("hidden")
       $("#perfil-laboral").removeClass("hidden").load("../ajax/perfil_laboral.php")
       $("#editar-pl").removeClass("hidden")
       $("#btn-listo").addClass("hidden")
     }})});


  $("#editar-info").click(function(e){
    var direccion,teléfono,correo
    direccion =  $.trim($("#direccion").text())
    telefono =  $.trim($("#telefono").text())
    correo =  $.trim($("#correo").text())

    $("#form_info").html(
      "<div class='input-group mb-3'>"+
      "<input type='text' class='form-control' name='direccion' id='input_direccion' placeholder='Direccion' aria-label='Direccion' aria-describedby='basic-addon1'></input></div>"+
      "<div class='input-group mb-3'>"+
      "<input type='text' class='form-control' name='telefono' id='input_telefono' placeholder='Telefono' aria-label='Telefono' aria-describedby='basic-addon1'></div>"+
      "<div class='input-group mb-3'>"+
      "<input type='text' class='form-control' name='correo' id='input_correo' placeholder='Correo' aria-label='Correo' aria-describedby='basic-addon1'></div>")

    $("#direccion").val(direccion)
    $("#telefono").val(telefono)
    $("#correo").val(correo)

    $("#editar-info , #info").addClass("hidden")

    $("#btn-cambiar").html("<button id='btn-cambiar-info' class='btn btn-outline-primary float-right'>Listo</button>")

    $("#input_direccion").val(direccion)
    $("#input_telefono").val(telefono)
    $("#input_correo").val(correo)

    $("#div-btn-info").html("<button type='submit' form='form_info' id='btn-cambiar-info' class='btn btn-outline-primary float-right'>Listo</button>")
  });

  $("#form_info").submit(function(e){
    e.preventDefault()
    $.ajax({
      url : "../ajax/informacion_aspirante.php?actualizar",
      type : "POST",
      data : new FormData(this),
      contentType : false,
      cache : false,
      processData : false,
      success: function(response){
        swal({
          title : response,
          type: "success",
          showConfirmButton: true})
        $("#editar-info").removeClass("hidden")
        $("#info").load("../ajax/informacion_aspirante.php").show()
        $("#btn-cambiar-info , #form_info").addClass("hidden")
      },
      error : function(){}
    });
  });


  /*

    JQuery disponibles en la seccion "mi" para las empresas

  */
  $("#editar-desc").click(function(e){
    var perfil_actual = $.trim($("#descripcion").text())
    $("#cambiar-desc").html("<textarea name='ds' id='descripcionEmpresa' class='form-control' aria-label='Perfil Laboral'>"+perfil_actual+"</textarea>")
    $("#cambiar-desc").removeClass("hidden")
    $("#descripcion").addClass("hidden")
    $("#btn-listo").html("<button type='submit' form='cambiar-desc' class='btn btn-outline-primary'>Listo</button>")
    $(this).addClass("hidden")
  });

  $("#cambiar-desc").submit(function(e){
    var form_data = new FormData(this);
    e.preventDefault();
    $.ajax({
      url : "../ajax/desc_empresa.php?d=editar",
      type: "POST",
      data : form_data,
      contentType : false,
      cache: false,
      processData: false
      ,success: function (response) {
       swal({
        title: "Descripcion actualizada",
        type: 'success',
        showConfirmButton: true})
       $("#cambiar-desc").addClass("hidden");
       $("#descripcion").removeClass("hidden").load("../ajax/desc_empresa.php")
       $("#editar-desc").removeClass("hidden")
       $("#btn-listo").addClass("hidden")} 
     });
  });

  $("#publicarOferta").submit(function(e){
    e.preventDefault()
    $.ajax({
        url :"../php/registrar_ofertas.php",
        type: "POST",
        contentType: false,
        cache: false,
        processData: false,
        data: new FormData(this),
        success: function(response) {
        swal({
          title: response,
          type: 'success',
          showConfirmButton: true})
        $(this).find("input[type=text], textarea").val("")
        },
        error: function(){
          alert("error")
        }
    });
  });

  $("#form-hv").change(function(e){
    archivo = $("#archivo_hv").get(0)
      $("#div-archivo").hide()
      $("#subir").show()
      datos_archivo = archivo.files[0].name
      datos_archivo += "<br> Tamaño:"
      datos_archivo += formatFileSize(archivo.files[0].size)
      $("#subir p").html(datos_archivo)
  });

  $("#form-hv").submit(function(e){
    e.preventDefault();
    $.ajax({
      url : '../php/subir_hv.php',
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(response){
        swal({
          title: response,
          type: 'success',
          showConfirmButton: true}).then((result) => {
        $(location).attr('href', '../mi/perfil.php');
    });
      },
      error: function(xhr, ajaxOptions, thrownError){
        swal({
          title: thrownError,
          type: 'error',
          showConfirmButton: true})
              $("#div-archivo").show()
      }
    });
  });



});//Cierra JQUERY