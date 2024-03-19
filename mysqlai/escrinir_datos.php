<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion ->connect_errno){
    die('No se puedo establecer una conecion a la base de datos');
}else {
    $sql = "INSERT INTO usuarios(ID, Nombre, edad, correo) VALUES(null, 'canoso', 6, 'niñitomamon@correo.com')";
    $conexion->query($sql);
    if($conexion -> affected_rows >=1){
        echo 'filas agregadas' . $conexion ->affected_rows;
    }
} 