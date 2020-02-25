<?php

    require_once 'connection.php';

    $query = "SELECT * FROM producto INNER JOIN categoria ON producto.categoria_id = categoria.idcat";
    $statement = $connection->prepare($query);
    $statement->execute();

    $dataList = $statement-> fetchAll();

    header('Content-Type: application/json');
    echo json_encode($dataList);
?>