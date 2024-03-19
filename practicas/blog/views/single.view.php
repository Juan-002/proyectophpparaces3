<?php  require 'views/header.php';?>

<div class="contenedor">
        <div class="post">
            <article> 
             <h2 class="titulo"><?php echo $post['titulo'];?></h2>
                <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                <div class="thumb">
                    <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'];?>" alt="<?php echo $post['thumb'];?>">
                </div>
                <p class="extracto"><?php echo nl2br($post['extracto']);?></p>
                <p class="texto"><?php echo nl2br($post['texto']);?></p>
                
            </article>
            <a href="index.php" class="btn">Inicio</a>
        </div>
        

</div>

<?php require 'piedepagina.php';?>
</body>
</html>