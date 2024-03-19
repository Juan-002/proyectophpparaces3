<?php
$numero = 17;// variable global
function mostrarNumero(){  // Cuando se quiere trabajar con variables que estan fuera de una funcion hay que desisgnarlas en la funcion para poder otorgarlas como parametros en  la funcion
     $numero = 10; // si se encuentra  la variable dentro de la funcion es una variable local
return  $numero;
    }
echo mostrarNumero();
#si la variable esta fuera de la funcion no puede accederse a ella  adentro de la funcion a no ser que se  llame como parametro de la funcion
#pero en caso que la variable esta dentro de la funcion, a esta no se puede accedesdede fuera a noser que se guarde en un return


?>