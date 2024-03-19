<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion ->connect_errno){
    die('No se puedo establecer una conecion a la base de datos');
}else {
    $sql = 'SELECT * FROM usuarios';
    $resultado = $conexion->query($sql);
   // echo $resultado->num_rows;
   if($resultado->num_rows){

    /*
    echo "<pre>";
     var_dump($resultado->fetch_assoc());
     echo $resultado -> fetch_assoc()['Nombre'];
     echo "</pre>";
    */

    while($fila = $resultado -> fetch_assoc()){
        echo  $fila['ID'].' - '. $fila['Nombre']. ' - '.$fila['edad']."<br />";
    }

    
   } else {
        echo 'esta vacio';
   }
    //echo $resultado;
}