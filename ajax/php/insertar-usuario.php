<?php
error_reporting(E_ALL);
header('Content-type: application/json; charset=utf-8');

$nombre = $_POST['nombre'];
$edad   = $_POST['edad'];
$pais   = $_POST['pais'];
$correo = $_POST['correo'];


function validarDatos($nombre, $edad, $pais, $correo){
    if ($nombre == "") {
        return false;
    } elseif ($edad == "" || is_int($edad)) {
        return false;
    } elseif ($pais == ""){
        return false;
    } elseif ($correo == "") {
        return false;
    }
    return true;
}

if (validarDatos($nombre, $edad, $pais, $correo)) {
    $conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');
    $conexion->set_charset('utf8');

    if ($conexion->connect_errno) {
        $respuesta = ['error' => true, 'reason' => 'conection'];
    }else {
        $statement = $conexion->prepare("INSERT INTO usuarios(nombre, edad, pais, correo) VALUES(?,?,?,?)");
        $statement->bind_param("siss", $nombre, $edad, $pais, $correo);
        $statement->execute();

        if ($conexion->affected_rows <=0) {
            $respuesta = ['error' => true, 'reason' => 'saving'] ;
        }
        $respuesta = [];
    }
    
} else {
    $respuesta = ['error' => true, 'reason' => 'invalid data'];
}

echo json_encode($respuesta);