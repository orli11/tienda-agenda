<?php
    include("../config/conexion.php");

    $conn=conectar();

    $nombre = $_POST['nombre'];
    $apaterno = $_POST['apaterno'];
    $amaterno = $_POST['amaterno'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //verificar que le usaurio exista
    $queryVerifica = "SELECT * FROM vendedor WHERE usuario='$usuario'";
    $validaCorreo = mysqli_query($conn, $queryVerifica);
    if($validaCorreo->num_rows == 0){
        //usuario no existe
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $queryInsert = "INSERT INTO vendedor VALUES(null, '$nombre', '$apaterno', '$amaterno', '$telefono', '$email','$passwordHash')";
        $result = mysqli_query($conn, $queryInsert);
        if($result){
            header("Location: ../../tiendaLogin.html");
        } else {
            header("location: ../../tiendaRegistro.html?error=true");
        }
    }else{
        //usuario si existe
        header("location: ../../tiendaRegistro.html?existe=true");
    }
?>