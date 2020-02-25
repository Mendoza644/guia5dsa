<?php
    include_once 'connection.php';

    $producto_id = $_GET['id'];

    $query_read = "SELECT * FROM producto WHERE id = :producto_id;";
    $read_producto = $connection->prepare($query_read);
    $read_producto->execute([':producto_id' => $producto_id]);

    $producto = $read_producto->fetch(PDO::FETCH_OBJ);

    if(isset($_POST['producto'])) {

        $producto_nombre = $_POST['producto'];

        $query_update_producto = "UPDATE producto SET nombre=:producto WHERE id=:producto_id";
        $update_producto = $connection->prepare($query_update_producto);
        if($update_producto->execute([':producto'=>$producto_nombre, ':producto_id'=>$producto_id])) {

            header('Location: index1.php');

        } else {
            echo "Update unsuccessful :(";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>Editar</title>
</head>

<body>
    <br>
    <h1>Editar un juego</h1>
    <br>
    <form method="POST">
        <input type="text" name="producto" required ?>
        <br><br>     
        <button type="submit" name="submit">guardar</button>
    </form>
</body>

</html>