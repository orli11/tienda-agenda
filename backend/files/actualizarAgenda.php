<?php 
    include("conexion.php");
    $conn = conectar();
    $id_conferencia = $_GET['id_conferencia'];
    $queryEvento = "SELECT * FROM conferencia WHERE id_conferencia='$id_conferencia'";
    $resultado = mysqli_query($conn, $queryEvento);
    $evento = mysqli_fetch_array($resultado);
?>
