<?php
include('connection.php');
$con = connection();

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$categoria = $_POST['categoria'];
$fecha = $_POST['fecha'];
$imagen = $_POST['imagen'];


$sql= "UPDATE noticias SET titulo='$titulo', texto='$texto', categoria='$categoria', fecha='$fecha', imagen='$imagen' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};


?>