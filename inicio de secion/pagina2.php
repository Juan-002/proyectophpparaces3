<?php
session_start();

if($_SESSION){
$nombre = $_SESSION['nombre'];
echo "<h1> Hola, $nombre</h1>";
echo print_r($_SESSION);
} else{
    echo "no has iniciado seccion"; 
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina 2</title>
    
</head>
<body>

<button class="cerrar seccion">
<a href="cerrar.php">cerrar secion</a>
</button>
</body>
</html>