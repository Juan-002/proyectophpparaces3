<?php
function cuadrado(int $numero){ #la funcion dicata que podemos agregar que tipo de caracter debe introducirse en la funcion si es int, string, booleano etc
return $numero * $numero;
};
$numero = 8;
echo 'el cuadrado de '.$numero.' es: '. cuadrado($numero);