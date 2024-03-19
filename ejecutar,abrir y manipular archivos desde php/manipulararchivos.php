<?php
#comprobar existencia de un documento
/*
if (file_exists('documento.txt')) { //file_exists es para comprobar que halla un archivo este regresa valores buleanos false/true
    echo "el archivo si existe";
} else {
    echo "no existe el archivo";
}
*/

#para ver el contenido de un archivo
//echo file_get_contents('documento.txt');

#para escribir o sobre escribir sobre el documento
//file_put_contents('documento.txt', "soy el nuevo texto \n", FILE_APPEND); //FILE_APPEND ES EL QUE SE ENCARGA QUE NO SE SOBRE ESCRIBA SI NO QUE SE ESCRIBA OTRO DATO
/*
for ($i=1; $i <= 10 ; $i++) { 
    file_put_contents('documento.txt', " $i \n", FILE_APPEND);
}
*/

#abrir la informacion del archivo en un arreglo
/*$archivo = file('documento.txt');
echo "<pre>";
print_r ($archivo);
*/
#si quiero seleccionar  un solo objeto del arreglo creado arriba solo debo usar echo $archivo[2];

?>