<?php
//forma 1 de hacer un arreglo
$dias_de_la_semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
// importante saber que se puede agregar  mas informacion a un arreglo de esta forma
$dias_de_la_semana[7] = 'Dia de Descanso';
// esta es otra forma de hacer un arreglo
$arreglo = ['Enero', 'Febrero', 'MArzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

//forma de mostrar un arreglo "Arreglo indexado" se llama así por que se recorrre llamando su posicion como un numero
//por posicion
echo $dias_de_la_semana[7].'<br />';
echo $arreglo[4].'<br />'; 
//'<br /> es un salto de linea en html
echo $dias_de_la_semana[0]. '<br />';
echo $dias_de_la_semana[1]. '<br />';
echo $dias_de_la_semana[2]. '<br />';
echo $dias_de_la_semana[3]. '<br />';
echo $dias_de_la_semana[4]. '<br />';
echo $dias_de_la_semana[5]. '<br />';
echo $dias_de_la_semana[6]. '<br />';

?>