<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
    <title>blog</title>
</head>
<body>

<header>
    <div class="contenedor">
        <div class="logo izquierda">
            <p><a href="<?php echo RUTA ?>">Mi primer Blog</a> </p>
        </div>
        <div class="derecha">
            <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                <input type="text" name="busqueda" placeholder="Buscar">
                <button type="submit" class="icono fa fa-search"></button>
            </form>

<nav class="menu">
    <ul>
        <li> <a href="#"></a><i class="fa fa-facebook"></i></li>
        <li> <a href="#"></a><i class="fa fa-twitter"></i></li>
        <li> <a href="#"></a><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
        <li> <a href="#"></a><i class="fa fa-instagram" aria-hidden="true"></i></li>
        <li> <a href="#"></a>Contacto <i class="fa fa-envelope"></i></li>
    </ul>
</nav>

        </div>
    </div>
</header>
</body>
</html>