<?php

$meses = array(
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
);
//sort($meses); //se toma la variable del array para especificar que se va a ordenar en orden alfabetico
rsort($meses);// este ordena alfaveticamente a la inversa  Estas funciones  sirven tanto para lineas de texto y numeros
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
            <meta charset="UTF-8">
            <title> Meses del año </title>
        </head>
        <body>
            <h1>Meses del año</h1>
            <ul>
             <?php foreach($meses as $mes){
                echo '<li>'. $mes . '</li>';
             } ;
             
             ?> 
                
            </ul>
        </body>
    </html>