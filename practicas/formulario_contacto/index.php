<?php

$errores ='';
$enviado ='';

if(isset($_POST['submit'])){
  $nombre = $_POST['nombre']; 
  $correo = $_POST['correo'];  
  $mensaje = $_POST['mensaje'];  

  if(!empty($nombre)) {
    $nombre = trim($nombre);
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
  } else {
    $errores .= 'Por favor ingrese un nombre <br />';
  }

  if(!empty($correo)) {
    $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
    
    if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores .= 'Por favor ingrese un correo valido <br />';
    }
  } else {
    $errores .= 'Por favor ingrese un Correo <br />';
  }

  if(!empty($mensaje)) {
    $mensaje = htmlspecialchars($mensaje);
    $mensaje = trim($mensaje);
    $mensaje = stripslashes($mensaje);

  } else {
    $errores .= 'Por favor ingrese el mensaje <br />';
  }

  if(!$errores){
    $enviar_a = 'correoAlcualSeEmviarElMEnsaje@gmail.com';
    $asunto = 'Correo nviado desde mi pagina.com';
    $mensaje_preparado = "De:  $nombre \n";
    $mensaje_preparado .= "Correo:  $correo \n";
    $mensaje_preparado .= "Mensaje: " . $mensaje;

    // mail($enviar_a, $asunto, $mensaje_preparado); #importante tener en cuenta que esta linea no funciona en localhost solo funciona desde un hosting
    $enviado = 'true';
    }
}

require 'index.view.php';

?>