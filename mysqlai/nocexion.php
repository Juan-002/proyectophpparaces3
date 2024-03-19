<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos' );
//echo $conexion->connect_errno;
if($conexion ->connect_errno){
    die('Error a la hora de conectarse al servidor');
} else{
    //Codigo
}