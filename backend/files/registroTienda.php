<?php
    include('../config/conexion.php');
    $conn = conectar();

    $nombre = $_POST['nombre'];
    $apaterno = $_POST['apaterno'];
    $amaterno = $_POST['amaterno'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $queryVerifica = "SELECT * FROM usuarios WHERE email='$email'";
    $validaUsuario = mysqli_query($conn, $queryVerifica);
    if($validaUsuario->num_rows == 0){

        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO usuarios VALUES (null, '$nombre', '$apaterno', '$amaterno', '$telefono',  '$email', '$passwordHash')";
        $result = mysqli_query($conn, $query);

        if($result){
            echo json_encode(['STATUS' => 'OK']);
            header("Location: ../../tiendaVendedor.html");
        } else {
            echo json_encode(['STATUS' => 'ERROR']);
            header("location: registroTienda.html");
        }
    } else {
        header("location: ../../tiendaVendedor.html?existe=true");
    }
?>