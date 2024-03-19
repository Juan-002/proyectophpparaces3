<?php
$id = $_GET['id'];
try{
    $conexion = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '');
    //echo " su conexion ok".'<br />';
    // fincion consultas preparadas prepared Statements


    $statement = $conexion->prepare('SELECT * FROM usuarios');
    $statement->execute(array(
       // ':id' => $id,
        //':id2' => 4
    ));

    $resultados = $statement->fetchAll();
   foreach($resultados as $usuario){
      echo  $usuario['Nombre']. "<br />";
   }

}catch(PDOExecption $e){
    echo "Error: " . $e->getMessage();
}

?>