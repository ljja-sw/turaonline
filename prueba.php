<?php 
session_start();

$parts = explode('@', $_SESSION['correo']);

$user = $parts[0];
// Stick the @ back onto the domain since it was chopped off.

echo 'Dependiendo del correo se le asígna un nombre de usuario y puede iniciar sesion con el: <br>';
echo 'Ejemplo: <br>';
echo 'Correo: '.$_SESSION['correo']."<br>";
echo 'Username: @'.$user;