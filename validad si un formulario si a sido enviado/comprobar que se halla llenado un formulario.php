<?php

$errores = '';

if(isset($_GET['submit'])) {
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
 if (!empty($nombre)){
   // $nombre = trim($nombre);
   // $nombre =htmlspecialchars($nombre);
    //$nombre =stripslashes($nombre);

    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

    echo "tu nombre es: $nombre <br />";

 } else{
        $errores .= 'Por favor llene el campo nombre <br />';
 }
 
if(!empty($correo)){
     $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo, FILTER_SANITIZE_EMAIL)){
                        $errores .= 'Por favor ingrese un correo valido <br />';
        }   else{
             echo"tu correo es: $correo";
            }   
} else{
        $errores .= 'Por favor ingrese un correo';
      }

}

?>
<!DOCTYPE html>
    <html lang = "en">
    <head>
            <meta charset="UTF-8">
            <title> Document </title>
            <style>
                    .error{color: red;}
            </style>
    </head>
    <body>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "get">
                <input type="text" name="nombre" placeholder = "Ingrese su nombre">
                <input type="email" name="correo" placeholder = "Ingrese su correo">

                    <?php if(!empty($errores)): ?>
                    <div class="error"><?php echo $errores; ?></div>
                    <?php endif; ?>

                <input type="submit" name="submit">
            </form>
</body>
</html>