<?php
include('connection.php');
$con = connection();

$sql = "SELECT * FROM noticias";
$query = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div>
        <form action="insert_text.php" method="POST">
            <h1>Crear anuncio</h1>
            <label for="titulo">Título:</label><br>
            <input type="text" id="titulo" name="titulo" placeholder="Título" required>
            <br>
            <br>
            <label for="texto">Texto:</label><br>
            <textarea id="texto" name="texto" rows="4" cols="50">
</textarea>
            <br>
            <br>
            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria">
                <option value="">Selecciona una categoría</option>
                <option value="costas">Costas</option>
                <option value="promociones">Promociones</option>
                <option value="ofertas">Ofertas</option>
            </select>
            <br>
            <br>
            <label for="date">Fecha:</label>
        <input type="date" id="date" name="fecha"><br><br>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*">
            <br>
            <br>
            <input type="submit" value="Insertar noticia">
        </form>
    </div>

    <div>
        <h2>Consulta de noticias
        </h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <br>
                    <th>Título</th>
                    <br>
                    <th>Texto</th>
                    <br>
                    <th>Categoría</th>
                    <br>
                    <th>Fecha</th>
                    <br>
                    <th>Imagen</th>
                    <br>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['titulo'] ?></th>
                        <th><?= $row['texto'] ?></th>
                        <th><?= $row['categoria'] ?></th>
                        <th><?= $row['fecha'] ?></th>
                        <th><?= $row['imagen'] ?></th>

                        <th><a href="update.php?id=<?= $row['id'] ?>">Editar</a></th>

                     
                        <th><a href="delete_text.php?id=<?= $row['id'] ?>">Eliminar</a></th>
                    </tr>
                    <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>