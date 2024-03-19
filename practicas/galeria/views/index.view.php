<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale?1.0, minimum-scale?1.0">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
    <div class="contenedor">
        <h1 class="titulo">Galeria de imagenes</h1>
    </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
           <?php  foreach ($fotos as $foto): ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['ID']; ?>">
                        <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                    </a>
                </div>
            <?php endforeach;?>
            <div class="paginacion">
                <?php if  ($pagina_actual > 1): ?>
                    <a href="index.php?p=<?php echo $pagina_actual -1; ?>" class="izquierda"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Pagina anterior</a>
                <?php endif ?>  
               
                <a href="subir.php" class="regresar"><i class="fa fa-share" aria-hidden="true"></i> subir foto</a>
               
                <?php if  ($total_paginas != $pagina_actual ): ?>
                    <a href="index.php?p=<?php echo $pagina_actual +1; ?>" class="derecha">Pagina siguiente  <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                <?php endif ?>   


<!--            <a href="#" class="izquierda"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Pagina anterior</a>
                <a href="#" class="derecha">Pagina siguiente <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
           -->            
            </div>
        </div>
    </section>
<footer>
    <p class="copyright"> Galeria creada por JuanFernando</p>
    <div class="copirigt">
        <ul>
            <li>
                <a href="https://www.linkedin.com/in/juan-fernando-rojas-bedoya-6a8998214/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="https://twitter.com/?lang=es"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
</footer>
</body>
</html>