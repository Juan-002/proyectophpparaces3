<?php

class persona{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){

        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
        
    }

    public function mostrarDatos(){
        echo $this->nombre.' de '. $this->pais.' con '. $this->edad. ' Años de edad';
    }
}

$juan = new persona("Juan Fernando", 27, "Colombia");
//$juan ->nombre = "Juan Fernando";
//$juan -> edad = 27;
//$juan -> pais = "Chigorodó";

$juan -> mostrarDatos();
echo '<br />';

$alejandro = new persona("Luis Alejandro", 12,"España");
//$alejandro -> nombre="Luis Alejandro";
//$alejandro -> edad = 12;
//$alejandro -> pais = "Carepa";

$alejandro -> mostrarDatos();
echo '<br />';

$hilda = new persona("Hilda Bedoya", 42, "Canada");
$hilda -> mostrarDatos();

?>