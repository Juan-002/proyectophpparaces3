<?php
class usuario {
    public $nombre;
    public $correo;
    
    function __construct ($nombre, $correo){

        $this-> nombre=$nombre;
        $this-> correo=$correo;

    }

    public function mostrarNombre(){
        echo "su nobre es: ".$this->nombre. '<br />';
            return $this;
    }

    public function mostrarCorreo(){
        echo "su correo es: ". $this->correo.'<br />';
        return $this;
    }
}

$juan = new usuario('Juan Fernando','juan@gmail.com');
$juan -> mostrarNombre()-> mostrarCorreo();