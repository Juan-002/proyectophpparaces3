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
// así se ingresa al ultimo dato del arreglo
//echo count($meses);
$ultimomes = count($meses) -1;
$meses[$ultimomes];
//echo $ultimomes;


// arreglos mediante siclo foreach

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
                //echo '<li>'. $mes . '</li>';
             } ;
             
             ?> 
                
            </ul>
        </body>
    </html>

