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

$juan = array('Nombre' =>'Juan', 'Edad' => '27', 'Sexo' => 'M');
?>
<!DOCTYPE html>
    <html lang = "en">
        <head>
            <meta charset="UTF-8">
            <title> Documento </title>
        </head>
        <body>
             <?php 
                //foreach($meses as $mes){
                //echo '<li>'. $mes . '</li>';
                // } ;
             foreach($juan as $amigo => $valores){
                echo '<li>'.$amigo.' : '.$valores.'</li>';
             }
             ?> 
                
            </ul>
        </body>
    </html>

