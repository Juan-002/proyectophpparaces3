<?php

function  suma( $numero1, $numero2){
return $numero1 + $numero2;

}
include 'index_view.php'; # el include  permite traer codigo de otro archivo pero si la ruta al archivo esta mal puede ejecutar el reto de paginas
require 'index_view.php';#  el include  permite traer codigo de otro archivo pero si la ruta al archivo esta mal  no permite ejecutar mas codigos hasta que no se repare la ruta
require_once 'index_view.php';#permite solo llamar una vez la linea de codigo
?>