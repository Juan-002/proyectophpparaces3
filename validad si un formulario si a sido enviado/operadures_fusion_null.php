<?php

# funcion vieja. $nombre = isset($_gert['nombre']) ? $_GET['nombre'] : 'anonimo';

#nueva forma
$nombre = $_GET['nombre'] ?? 'Anonimo';
echo $nombre;

?>