<?php
$edad = 18;
$edad = (isset($edad))? $edad :'El usioario no a agregado un dato' ;
echo 'edad: '.$edad;

/* Esto es lo mismo que hacer
if(condition){
$edad = $edad;
} else {
    $edad = 'El usioario no a agregado un dato';
}
echo 'edad: '.$edad;
*/

?>