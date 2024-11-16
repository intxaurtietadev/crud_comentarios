<?php
include('connection.php');
$con = connection();

$id = null;
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$categoria = $_POST['categoria'];
$fecha = $_POST['fecha'];
$imagen = $_POST['imagen'];


$sql= "INSERT INTO noticias VALUES('$id','$titulo','$texto','$categoria','$fecha','$imagen')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};

?>