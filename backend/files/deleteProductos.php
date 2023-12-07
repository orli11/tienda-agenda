<?php
    include("../config/conexion.php");
    $conn = conectar();
    $id_prod = $_GET['id_prod'];
    $queryDelete = "DELETE FROM productos WHERE id_prod='$id_prod'";
    $result = mysqli_query($conn, $queryDelete);
    if($result) {
        Header("Location: ../../tiendaVendedor.html");
    } else {
        echo json_encode(['STATUS' => 'ERROR']);
        header("location: tiendaVendedor.html?error=true");
    }
?>