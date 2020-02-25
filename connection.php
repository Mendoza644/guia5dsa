<?php

    $host = 'mysql:host=localhost; dbname=tienda_videojuegos';
    $user = 'root';
    $password = '';

    try {
        $connection = new PDO($host, $user, $password);
    } catch(PDOException $e) {
        echo "ERROR: " . $e -> getMessage();
        die;
    }

?>