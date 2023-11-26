<?php
    include("../config/conexion.php");
    $conn = conectar();

    $nombre = $_POST["name"];
    $apaterno = $_POST["apaterno"];
    $amaterno = $_POST["amaterno"];
    $telefono = $_POST["tell"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $esVendedor = isset($_POST["checkVendedor"]) ? 1 : 0;
    $esCliente = isset($_POST["checkCliente"]) ? 1 : 0;

    $queryInsertar = "INSERT INTO usuarios VALUES(null, '$nombre', '$apaterno', '$amaterno', '$telefono', '$email', '$password', '$esVendedor', '$esCliente')";
    $result = mysqli_query($conn, $queryInsertar);
    
    if($result) {
        echo json_encode(['STATUS' => 'SUCCESS', 'MESSAGE' => 'Usuario Registrado']);
    } else {
        echo json_encode(['STATUS' => 'ERROR']);
    } 
?>