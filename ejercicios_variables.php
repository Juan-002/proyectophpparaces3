<?php
//String: cadena de texto
$nombre = 'Juan';

//Integer: numeros enteros
$numero = 7 ;

//Double: es  un numero decimal
$numero_decimal = 7.7;

//Boolean: es verdadero o falso (true/false)
$verdadero = false;

echo 'Hola'.', '. $nombre .', '.'tienes'. $numero .'años'.', '.'cuentas con'. $numero_decimal. 'pesos';

/* para saber que tipo de dato trae una variable  se usa "gettype()"
y para mostrar en pantalla usamos "echo" entonses en el caso que queramos ver en pantalla si 
una bariable es tipo entero/linea de texto/ decimal/verdadero o falso lo hacemos así:*/
echo gettype($numero_decimal);

?>