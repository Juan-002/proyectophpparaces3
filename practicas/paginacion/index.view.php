<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paginacion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor"> 
        <h1>Articulos</h1>
        <section class = "articulos"> 
            <ul>
                <?php foreach ($articulos as $articulo) : ?> 
                    <li><?php echo $articulo['ID']. '.-'. $articulo['articulo'] ?></li>
                <?php endforeach; ?>
                
            </ul>
        </section>

        <section class="paginacion">
            <ul>
<!-- Establecemos el boton de "anterior" estara desabilitado -->
                <?php if ($pagina ==1) : ?>
                    <li class="disabled"> &laquo;</li>
                <?php else: ?>
                <li> <a href="?pagina= <?php echo $pagina -1 ?>">&laquo;</a> </li>
                <?php endif; ?>
<!-- ejecutamos el ciclo para mostrar las paginas -->
            <?php
                for ($i=1; $i <= $numeroPagina ; $i++) { 
                    if ($pagina == $i ) {
                       echo "<li class='active'> <a href='=pagina=$i'> $i </a></li>";
                    } else {
                        echo "<li> <a href='?pagina=$i'>$i</a> </li>";
                    }
                } 
            ?>
<!-- establecemos cuando el boton de "siguiente" estara desabilitado -->
                <?php if ($pagina ==$numeroPagina) : ?>
                    <li class="disabled"> &raquo;</li>
                <?php else: ?>
                    <li> <a href="?pagina= <?php echo $pagina +1 ?>">&raquo;</a> </li>
                <?php endif; ?>

            </ul>
        </section>
    </div>
</body>
</html>