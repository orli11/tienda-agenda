<?php
    include("../config/conexion.php");
    $conn = conectar();
    $id_conferencia = $_GET['id_conferencia'];
    $queryDelete = "DELETE FROM conferencia WHERE id_conferencia='$id_conferencia'";
    $result = mysqli_query($conn, $queryDelete);
    if($result) {
        Header("Location: ../../agendaInicial.html");
    } else {
        echo json_encode(['STATUS' => 'ERROR']);
        header("location: agendaInicial.html?error=true");
    }
?>