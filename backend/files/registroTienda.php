<?php
    include("../config/conexion.php");
    $conn = conectar();

    $nombre = $_POST["nombre"];
    $apaterno = $_POST["apaterno"];
    $amaterno = $_POST["amaterno"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $password = $_POST["password"];

      // Verificar que el ususario exista 
  $queryVerifica = "SELECT * from usuarios WHERE email='$email'";
  $validaCorreo  = mysqli_query($conn, $queryVerifica);
  //console.log('email', email)
  //echo $validaCorreo;
  //die;
  if ($validaCorreo->num_rows == 0) {
    // Usuario no existe
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);
    $queryInsert = "INSERT INTO usuarios VALUES(null, '$nombre', '$apaterno', '$amaterno', '$telefono', '$email',  '$passwordHash')";
    $result = mysqli_query($conn, $queryInsert);
    if($result) {
      Header("Location: ../../tiendaLogin.html");
    } else {
      Header("Location: ../../tiendaRegistro.html?error=true");
    }
  } else {
    // Usuario existe
    Header("Location: ../../tiendaRegistro.html?existe=true");
  }
?>