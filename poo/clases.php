<?php

class persona {
    public $nombre;
    public $edad;
    public $nacimiento;
    public $documento;

   public function mostrarInformacion(){

    echo "Hola, ";

   }
}


$juan = new persona;
$juan -> nombre = "Juan";
$juan -> documento = 1038816736;
$juan -> edad = 27;

$luis = new persona;
$luis -> nombre = "Luis Alejando";
$luis -> documento = 1128368;
$luis -> nacimiento ="Cigorodó";
$luis -> edad = 12;

$juan ->mostrarInformacion();

echo "su nombre es: ". $juan -> nombre. ", Su documento es: ". $juan->documento.", tienes: ". $juan-> edad. " de edad" ;
echo "<br />";



echo "Hola ". $luis -> nombre." Tienes $luis->edad de edad". " Nacido en $luis->nacimiento"." con documento: $luis->documento muchas gracias por participar";
echo "<br />";


?>