<?php
    include("../config/conexion.php");
    $conn = conectar();
    $id_prod = $_GET['id_prod'];
    $queryDelete = "DELETE FROM productos WHERE id_prod='$id_prod'";
    $result = mysqli_query($conn, $queryDelete);
    if($result) {
        Header("Location: ../../tiendaCliente.html");
    } else {
        echo json_encode(['STATUS' => 'ERROR']);
        header("location: tiendaRegistro.html?error=true");
    }
?>