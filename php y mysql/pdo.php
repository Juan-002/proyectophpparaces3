<?php

$id = $_GET['id'];

try{
    //codigo
    $conexion = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '');
 echo "conexion ok".'<br />';

#---------------------asi podemos hacer para que se pueda consultar el dato por url---------------------------------------------------------------
#metodo quey
$resultados = $conexion -> query("SELECT * FROM usuarios WHERE id = $id");
foreach($resultados as $fila){
   echo $fila['Nombre'].', '.$fila['Correo'] .'<br />';
}

#--------------------------------------------------------------------------------------

 // aqui se pone el codigo para mostrar  los datos de la base de datos
/*
#-----------------------------------------------------------------------

 esta es la forma de ver los datos
$resultados = $conexion -> query('SELECT * FROM usuarios');
foreach($resultados as $fila){
   echo $fila['Nombre'].', '.$fila['Correo'] .'<br />';

}
*/
#--------------------------------------------------------------------------------------
/*
#esta es la forma de insertar datos a  la base de datos
$resultados = $conexion->query('INSERT INTO usuarios values(null,"Maria dolores","maria@hotmail.com","13246465")');

*/
}    catch(PDOExecption $e){
//mostrar errores
echo"error: " . $e->getMessage();

}


?>