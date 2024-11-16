<?php

include('connection.php');
$con = connection();

$id=$_GET['id'];


$sql = "SELECT * FROM noticias WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
</head>
<body>
<div>
        <form action="edit_text.php" method="POST">
            <h1>Editar usuario</h1>

            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="titulo" placeholder="Título" value="<?= $row['titulo'] ?>">
            <input type="text" name="texto" placeholder="Texto" value="<?= $row['texto'] ?>">
            <input type="text" name="categoria" placeholder="Categoría" value="<?= $row['categoria'] ?>">
            <input type="text" name="fecha" placeholder="Fecha" value="<?= $row['fecha'] ?>">
            <input type="text" name="imagen" placeholder="Imagen" value="<?= $row['imagen'] ?>">

            <input type="submit" value="Actualizar información">
        </form>
    </div>
</body>
</html>