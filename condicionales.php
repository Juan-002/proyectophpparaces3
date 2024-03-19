<?php
//if(Condicion){instruccion a seguir}
/* 
Operadores de comparacion
= asignacion
== igualdad
<menor que
>mayor que
<= menor o igual que
>= mayor o igual que
!= diferente
!negacion
*/

/*
**Operador logico
 && -Evalua que se cumplan las dos condiciones en los query es AND
 ||, OR -evalua que se cumpla almenos una condicion
 xor -Evalua que se cumpla una y solo una condicion 
*/
$edad = 18;
$nombre = 'Juan'
if($edad >= 18 && $nombre == 'Juan'){
    echo '<h1> Bien Benido </h1>';

};
if($edad < 18){
    echo '<h1> No puedes Entrar <h1>';
};


?>