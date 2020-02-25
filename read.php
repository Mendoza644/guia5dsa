<?php
include_once 'connection.php';

$sqlProductoCategoria = 'SELECT * FROM producto INNER JOIN categoria ON producto.categoria_id = categoria.idcat';
$statementPC = $connection->prepare($sqlProductoCategoria);
$statementPC->execute();

$listaProductosCategorias = $statementPC->fetchAll();

$sqlCategorias = 'SELECT * FROM categoria';
$statementC = $connection->prepare($sqlCategorias);
$statementC->execute();

$listaCategorias = $statementC->fetchAll();

$sqlProductos = 'SELECT * FROM producto';
$statementP = $connection->prepare($sqlProductos);
$statementP->execute();

$listaProductos = $statementP->fetchAll();
?>