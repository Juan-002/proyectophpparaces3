<?php

//$_POST
if(!$_POST){

    header('Location: http://localhost/Curso_PHP/Formularios/');
}
$nombre = $_POST['nombre'];
$sexo = $_POST['Sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

if($nombre){
    echo $nombre;

} else{
    echo "El usuario no agrego un nombre";
    echo "<br />";
}
echo'Hola, '. $nombre . ' Eres '. $sexo;


?>