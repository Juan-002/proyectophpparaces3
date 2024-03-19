<?php  require '../views/header.php'; ?>

    <div class="post">
        <div class="contenedor">
            <article> 
                <h2 class="titulo">Nuevo Articulo</h2>
                <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" name="titulo" placeholder="Titulo del Articulo">
                    <input type="text" name="extracto" placeholder="extracto del Articulo">
                    <textarea name="texto" placeholder="texto del articulo"></textarea>
                    <input type="file" name="thumb">
                    <input type="submit" value="Crear Articulo">

                </form>        
            </article>
        </div>
    </div>


<?php require 'piedepagina.php'; ?>