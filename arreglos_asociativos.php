<?php

$juan = array('Nombre' =>'Juan', 'Edad' => '27', 'Sexo' => 'M');
echo $juan['Nombre'].'<br />';
echo $juan['Edad'].'<br />';
echo $juan['Sexo'].'<br />';

//En caso que requeramos  modificar algun dato  del arreglo asociativo se puede hacer de igual forma que en el indexado

 $juan['Edad'] = '29';
 echo $juan['Edad'];
?>