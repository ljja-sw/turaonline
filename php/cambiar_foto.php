<?php
session_start();
include '../php/conexion_db.php';
include '../vendor/php-image-resize/ImageResize.php';

if(isset($_GET["c"]) && $_GET["c"] == "foto_perfil"){
	cambiar_foto_p();}
    elseif (isset($_GET["c"]) && $_GET["c"] == "logo") {
     cambiar_logo();}

     function formatear_imagen($dir,$img){
        $tamaños = array('500_'=> 500,'300_' => 300,'128_' => 128 );
        $img_original = $dir.$img.".png";
        $image = new ImageResize($img_original);
       
        foreach ($tamaños as $key => $value) {
            $img_temp = $dir.$key.$img.".png";
            $image->crop($value,$value);
            $image->save($img_temp);
        }
    
    }


    function cambiar_foto_p(){
        $upload_directory = "../store/aspirantes/".$_SESSION['cedula']."/img/";
        $nombre_img=$_SESSION["id_usuario"];
        $img = $upload_directory.$nombre_img;

        if (!file_exists($img.".png")) {
            $msg = "Imagen Actualizada veras el cambio el proximo inicio de sesión";
        } else {
            $msg = "Imagen Actualizada";
        }
        
        if(move_uploaded_file($_FILES['img_perfil']['tmp_name'], $img.".png")){
            echo $msg;
            formatear_imagen($upload_directory,$nombre_img);
        }
    }


    function cambiar_logo(){
        $upload_directory = "../store/empresas/".$_SESSION['nit']."/img/"; 
        $nombre_img=$_SESSION["id_empresa"];
        $img = $upload_directory.$nombre_img;

        if (!file_exists($img.".png")) {
            $msg = "Imagen Actualizada veras el cambio el proximo inicio de sesión";

        } else {
            $msg = "Imagen Actualizada";
        }
        
        if(move_uploaded_file($_FILES['img_perfil']['tmp_name'], $img.".png")){
            echo $msg;
            formatear_imagen($upload_directory,$nombre_img);
        }
    }

