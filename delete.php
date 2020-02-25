<?php 

    include_once 'connection.php';

    $producto_id = $_GET['id'];

    $query_delete = "DELETE FROM producto WHERE id='$producto_id';";
    $sql_delete = $connection->prepare($query_delete);
    $sql_delete->execute(array($producto_id));

    header("location: index1.php");

?>