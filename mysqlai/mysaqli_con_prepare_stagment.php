<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');
if($conexion ->connect_errno){
    die('No se puedo establecer una conecion a la base de datos');
}else {
    $statement = $conexion ->prepare("INSERT INTO usuarios(ID, Nombre, edad, correo) VALUES(?, ?, ?, ?)");
    //reemplazamos los placeholders con los valores que se quieren usar 
    //una s por placeholder que se tenga
    //S= string
    //i= integer
    //d= double
    $statement ->bind_param('ssis', $id, $nombre, $edad, $correo);
    $id = NULL;

    if(isset($_GET['Nombre']) && isset($_GET['edad']) && isset($_GET['correo'])){
        $nombre = $_GET['Nombre'];
        $edad = $_GET['edad'];
        $correo = $_GET['correo'];    }
  //importante todo lo parametrizado con los placeholder ('s,i,d') se debe llamar si lo vamos  agregar por url
    $statement->execute();

   
    if($conexion -> affected_rows >=1){
        echo 'filas agregadas' . $conexion ->affected_rows;
    } else {
        echo 'no se agrego nada a la BD';
    }
} 