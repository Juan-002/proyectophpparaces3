<?php
if(isset($_COOKIE['font-size'])){
    $tamaño = htmlspecialchars ($_COOKIE['font-size']);
} else{

$tamaño = '15px';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>texto</title>
    <style>
        p {
            font-size: <?php echo $tamaño ?>
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Consectetur dolores voluptatibus quibusdam vero ipsum, 
        voluptas atque deserunt. At laboriosam reiciendis 
        doloremque tenetur suscipit voluptates quis maxime, 
        excepturi cumque error adipisci?</p>
</body>
</html>