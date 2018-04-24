function registroAspirantes(){
	var nombre, apellido,documento,telefono,cedula,direccion,email,contrasena,confirmar,error

   nombre = document.getElementById('nombre_d').value;
    apellido = document.getElementById('apellido_d').value;
    cedula = document.getElementById('cedula_d').value;
    telefono = document.getElementById('numero_tel_d').value;
    direccion = document.getElementById('direccion_d').value;
    email = document.getElementById('correo_d').value;
    contrasena = document.getElementById('contrasenia_d').value;
    confirmar = document.getElementById('confirmacion_contrasenia').value; 

  expresion = /\w+@\w+\.+[a-z]/;

  if(nombre === "" || apellido === "" || cedula === "" || telefono === "" || direccion === "" || email === "" || contrasena === "" ||
    confirmar === "") {
    error = "Todos los campos son obligatorios";
    alert(error);
    return false;
  }
  else if (nombre.length>45) {
  error = "El nombre es muy largo";
  alert(error);
    return false;
  }
  else if (apellido.length>45) {
  error = "El apellido es muy largo";
  alert(error);
    return false;
  }
  else if (cedula.length>11) {
  error = "El documento de identidad es muy largo";
  alert(error);
    return false;
  }
  else if (isNaN(cedula)) {
  error = cedula+" El dato ingresado no es un número de cédula";
  alert(error);
    return false;
  }
  else if (telefono.length>10) {
  error = "El teléfono es muy largo";
  alert(error);
    return false;
  }
  else if (isNaN(telefono)) {
  error = "El dato ingresado no es un número de teléfono";
  alert(error);
    return false;
  }
  else if (direccion.length>50) {
  error = "La Dirección es muy larga";
  alert(error);
    return false;
  }
  else if (email.length>50) {
  error = "El Correo es muy largo";
  alert(error);
    return false;
  }
  else if(!expresion.test(email)){
  error = "El correo no es valido";
  alert(error);
    return false;
  }
  else if (contrasena.length>30) {
  error = "La contraseña es muy larga";
  alert(error);
    return false;
  }
  else if (contrasena.length<8) {
  error = "La contraseña es muy corta Minimo 8 caracteres";
  alert(error);
    return false;
  }
  else if (contrasena !== confirmar) {
  error = "La contraseña y la confirmación de contraseña no son iguales";
  alert(error);
    return false;
  }else{
    return true;
  }
}


function alert(error){
	  swal({
      title: error,
      type : "warning",
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Entendido',
      confirmButtonClass: 'btn btn-success',
      buttonsStyling: true})
}

function registroEmpresa(){
  var nombre_empresa,sector_empresa,nit_empresa,telefono_empresa,direccion_empresa,correo_empresa,contrasena_empresa,confirmar_empresa

    nombre_empresa = document.getElementById('nombre').value;
    sector_empresa = document.getElementById('sector');
    nit_empresa = document.getElementById('nit').value;
    telefono_empresa = document.getElementById('telefono').value;
    direccion_empresa = document.getElementById('direccion').value;
    correo_empresa = document.getElementById('correo').value;
    contrasena_empresa = document.getElementById('contrasena').value;
    confirmar_empresa = document.getElementById('contrasena_verificacion').value; 

  if(nombre_empresa === "" || sector_empresa === "" || nit_empresa === "" || telefono_empresa === "" || direccion_empresa === "" || correo_empresa === "" || contrasena_empresa === "" ||
    confirmar_empresa === "") {
    error = "Todos los campos son obligatorios";
    alert(error);
    return false;
  }
  else if (nombre_empresa.length>45) {
  error = "El nombre es muy largo";
  alert(error);
    return false;
  }  
  else if (sector_empresa == 0) {
  error = "Recuerda: Debes registrar un sector en tu perfíl";
  alert(error);
    return true;
  }  
  else if (direccion_empresa.length>45) {
  error = "El nombre es muy largo";
  alert(error);
    return false;
  }  
  else if (isNaN(nit_empresa)) {
  error = "El NIT Insertado no es un número";
  alert(error);
    return false;
  }
  else if (nit_empresa.length>15 || nit_empresa.length<8) {
  error = "Verifica el NIT [MIN 8][MAX 15]";
  alert(error);
    return false;
  }
  else if (telefono_empresa.length>11) {
  error = "El telefono insertado es muy largo [MAX 11]";
  alert(error);
    return false;
  }  
  else if (isNaN(telefono_empresa)) {
  error = "El número insertado no es un número de teléfono";
  alert(error);
    return false;
  } 
  else if (correo_empresa.length>45) {
  error = "El correo insertado es muy largo";
  alert(error);
    return false;
  }  
  else if (contrasena_empresa.length>15) {
  error = "Maximo 15 Caracteres permitidos para la Contraseña";
  alert(error);
    return false;
  }
   else if (confirmar_empresa !== contrasena_empresa) {
  error = "Las contraseñas no coinciden";
  alert(error);
    return false;
  }else{
    return true;
  }
}