<?php
class  persona {
public static $dia = '05/04/2023';

public static function saludo($nombre = null){
    if($nombre){
        return "Hola, Buen dia". $nombre;
    } else{
        return "Hola, Buenos Días";
    }

}

}
/*
$juan = new persona;
echo $juan -> dia;
*/
echo "<br />";
echo persona::saludo(' Juan');
echo "<br />";
echo persona::$dia;

?>