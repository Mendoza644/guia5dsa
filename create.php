<?php
include_once 'connection.php';
    
$producto = $_POST['nombre'];
$categoria = $_POST['categoria'];

$sqlInsert = "insert into producto(nombre, categoria_id) values (?, ?);";

$statement = $connection -> prepare($sqlInsert);
$statement -> execute(array($producto, $categoria));

header('Location: index1.php');
?>