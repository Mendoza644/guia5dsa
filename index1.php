<?php
require_once 'read.php';
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
    <title>Tienda de Videojuegos</title>
</head>

<body>
    <br>
    <h1>Tienda de Videojuego</h1>
    <br>
    <h2>Registre un videojuego</h2>
    <form action="create.php" method="post">
        <input type="text" name="nombre" required>
        <br><br>
        <select name="categoria" required>
            <option value="null">Categoria del videojuego</option>
            <?php foreach ($listaCategorias as $categoria) : ?>
                <option value=<?php echo $categoria['idcat']; ?>>
                    <?php echo $categoria['nombrecat']; ?>
                </option>
            <?php endforeach ?>
        </select>
        <br><br>
        <button type="submit" name="enviar">Registrar</button>
    </form>
    <br>
    <h2>Videojuegos registrados</h2>
    <br>
    <ul class="list-group">

        <table class="table">
            <th>ID</th>
            <th>Nombre del Videojuego</th>
            <th>Categoria del Videojuego</th>
            <th></th>
            <th></th>
            <?php foreach ($listaProductosCategorias as $juego) :  ?>
                <tr>
                    <td><?php echo $juego['id']; ?></td>
                    <td><?php echo $juego['nombre']; ?></td>
                    <td><?php echo $juego['nombrecat']; ?></td>
                    <td><a href="update.php?id=<?php echo $juego['id']; ?>">Editar</a></td>
                    <td><a href="delete.php?id=<?php echo $juego['id']; ?>">Eliminar</a></td>
                </tr>
            <?php endforeach ?>
        </table>
</body>

</html>