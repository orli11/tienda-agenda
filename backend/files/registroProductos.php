<?php
    include("../config/conexion.php");

    $conn = conectar();

    $nombre_prod = $_POST['nombre_prod'];
    $precio = $_POST['precio'];
    $descripcion_prod = $_POST['descripcion_prod'];
    $nombre_vendedor = $_POST['nombre_vendedor'];

    $queryInsertar = "INSERT INTO productos VALUES(null, '$nombre_vendedor', '$nombre_prod', '$precio', '$descripcion_prod')";
    $result = mysqli_query($conn, $queryInsertar);
    
    if($result) {
        echo json_encode(['STATUS' => 'SUCCESS', 'MESSAGE' => 'Producto Registrado']);
        Header("location: ../../tiendaVendedor.html");
    } else {
        echo json_encode(['STATUS' => 'ERROR']);
        Header("location: ../../tiendaVendedor.html?error=true");
    } 
?>