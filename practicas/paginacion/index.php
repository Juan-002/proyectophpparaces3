<?php

try {
   $conexion = new PDO('mysql:host=localhost;dbname=practica_paginacion','root','');
} catch (PDOException $e) {
   echo "ERROR: ". $e->getMessage();
   die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
$postPorPagina = 6;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $postPorPagina");

$articulos->execute();
$articulos = $articulos->fetchAll();

if(!$articulos){
header('Location: index.php');
}

$totlaArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totlaArticulos = $totlaArticulos->fetch()['total'];

$numeroPagina = ceil($totlaArticulos / $postPorPagina);


require'index.view.php';

?>