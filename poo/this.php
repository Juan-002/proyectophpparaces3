<?php

class persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarDatos(){
        echo $this->nombre.' de '. $this->pais.' con '. $this->edad. ' de edad';
    }
}

$juan = new persona;
$juan ->nombre = "Juan Fernando";
$juan -> edad = 27;
$juan -> pais = "Chigorodó";

$juan -> mostrarDatos();
echo '<br />';

$alejandro = new persona;
$alejandro -> nombre="Luis Alejandro";
$alejandro -> edad = 12;
$alejandro -> pais = "Carepa";

$alejandro -> mostrarDatos()
?>