<?php
/*
count();
sort();
rsort();
var_dump();
print_r();
*/

function saludo($nombre){
echo "saludo, $nombre!";
}

saludo("Juan");// entre los(se pone el parametro que se quiere imbocar con la funcion )
echo"<br />";

function sumar($numero, $numero2){
    $resultado = $numero + $numero2;
    echo $resultado;
    echo"<br />";
    echo"----------------------------------------------------------";
    echo"<br />";
}

sumar(1, 56);

#sentencia return
function sumar2($numero, $numero2){
    $resultado = $numero + $numero2;
    return $resultado; // return guarda la informacion
}
$result = sumar2 (25, 30);
echo $result;



?>