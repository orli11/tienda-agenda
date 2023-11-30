<?php
    include("../config/conexion.php");
    $conn = conectar();
    $nombre = $_POST["name"];
    $apaterno = $_POST["apaterno"];
    $amaterno = $_POST["amaterno"];
    $telefono = $_POST["tell"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(isset($_POST["checkVendedor"])) {
        $esVendedor = 1;
    } else {
        $esVendedor = 0;
    }
    if(isset($_POST["checkCliente"])) {
        $esCliente = 1;
    } else {
        $esCliente = 0;
    }

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