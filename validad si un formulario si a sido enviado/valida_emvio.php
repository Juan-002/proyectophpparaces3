<?php
# metodo 1
if ($_SERVER['REQUEST_METHOD']=='GET'){
    echo "se enviaron por GET";
} else {
    echo "Se enviaron por POST";
}
#metodo2
/*
if(isset($_GET['submit'])) { #este caso tiene un aventaja y es que  en donde esta submit se puede poner el nombre del formulario que vamos a comprobar y asi  saber especificamente cuak es 
 echo"se han enviado los datos correctamente";
 print_r($_GET['submit']);

}
*/
?>