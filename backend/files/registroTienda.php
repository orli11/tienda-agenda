<?php
    include("../config/conexion.php");
    $conn = conectar();
    $dataPost = file_get_contents('php//input');
    $body = json_decode($dataPost, true);
    $nombre = $body["name"];
    $apaterno = $body["apaterno"];
    $amaterno = $body["amaterno"];
    $telefono = $body["tell"];
    $email = $body["email"];
    $password = $body["password"];
    $esVendedor = isset($body["checkVendedor"]) ? 1 : 0;
    $esCliente = isset($body["checkCliente"]) ? 1 : 0;

    $queryInsertar = "INSERT INTO usuarios VALUES(null, '$nombre', '$apaterno', '$amaterno', '$telefono', '$email', '$password', '$esVendedor', '$esCliente')";
    $result = mysqli_query($conn, $queryInsertar);
    
    if($result) {
        echo json_encode(['STATUS' => 'SUCCESS', 'MESSAGE' => 'Usuario Registrado']);
        if ($esVendedor === 1){
            Header("location: ../../tiendaVendedor.html");
        } elseif ($esCliente === 1) {
            Header("location: ../../tiendaCliente.html");
        }
    } else {
        echo json_encode(['STATUS' => 'ERROR']);
    } 
?>
