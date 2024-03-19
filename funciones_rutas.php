<?php
/*
echo pathinfo('documento.txt', PATHINFO_FILENAME);
  * PATHINFO_DIRNAME // devuelve el directorio padre del archivo
  * PATHINFO_BASENAME //devuelve el nombre del archivo con su extension
  * PATHINFO_EXTENSION // devuelve la extension del archivho
  * PATHINFO_FILENAME // devielve el nombre del archivoS
*/

/*
# para buscar los archivos  segun su extencion
$resultados = glob('*.php');
print_r($resultados);
*/
# lo mismo pero para usar distintas extenciones a la vez
/*
$resultados = glob('*.{png,jpg,php,txt,doc}', GLOB_BRACE);
print_r($resultados);
*/
# tambien se puede declarar rutas para  indicar donde esta el archivo que se quiere buscar  por extencion
/*
$resultados = glob('practicas/loging/*.{png,jpg,php,txt,doc}', GLOB_BRACE);
print_r($resultados);
*/

#buscar el nombre base de un archivo incluyendo su extencion
echo basename('practicas/loging/cerrar.php', '.php');
                                            //esta parte es para eliminar la extencion

?>