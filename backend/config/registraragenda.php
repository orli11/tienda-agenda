<?php
    include("..//config/conexion.php");

    $conn = conectar();

    $nombre_con = $_POST['nombre_con'];
    $nombre_pon = $_POST['nombre_pon'];
    $especialidad_pon = $_POST['especialidad_pon'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $area = $_POST['area'];

    $queryInsert = "INSERT INTO conferencia VALUES(null, '$nombre_con', '$nombre_pon', '$especialidad_pon', '$lugar', '$fecha', '$hora', '$area')";
    $result = mysqli_query($conn, $queryInsert);
    if($result) {
        header("Location: ../../index.html");
    }
?>