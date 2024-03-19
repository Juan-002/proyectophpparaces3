<?php
abstract class persona {
    public function saludo (){
        return "Hola";
    }

}

class señorjuan extends persona {

}
/*
$juan =new persona;  en este caso no muestra informacion por que  la clase abtract impide que llamando la clase principal  se pueda tomar informacion para ello se debe eredar a una nueva clase
echo $juan -> saludo(); 
*/
$juan =new señorjuan;
echo $juan -> saludo();
