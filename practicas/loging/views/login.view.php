<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div class = "contenedor">
        <h1 class="titulo"> Inicio de sesion </h1>
        <hr  class="border"> 

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">            
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">            
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i> 
            </div>

            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php  echo $errores;  ?>
                    </ul>
                </div>
            <?php endif;  ?>   

        </form>

        <p class="texto-registrate">
            ¿Aun no tienes Cuenta?
            <a href="registro.php">Registrate</a>
        </p>
    </div>
</body>
</html>