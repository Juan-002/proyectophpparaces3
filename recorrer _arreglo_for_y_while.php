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
/*for($i = 0; $i < count($meses);$i++){
    echo $meses[$i].'<br />';

}
*/
$contador = 0;
while($contador < count($meses)){
    echo $meses[$contador].'<br />';
    $contador ++;// se debe hacer el incremento de contador para que contador se sume hasta el total de elemento ya que siempre va a ser 0 seria infinito
}


#do_while
$i = 1;
do{
    echo $i . '<br/>';
    $i++;
} while($i == 20);





?>