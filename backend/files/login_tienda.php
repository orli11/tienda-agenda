<?php
    include("../config/conexion.php");
    $conn = conectar();
    $dataPost = file_get_contents('php://input');
    $body = json_decode($dataPost, true);

    if($body !== null){
        $email = $body['email'];
        $password = $body['password'];

        $queryVendedor = "SELECT * FROM vendedor WHERE email='$email'";
        $validaVendedor = mysqli_query($conn, $queryVendedor);

        if($validaVendedor->num_rows > 0){
            $vendedor = $validaVendedor->fetch_assoc();
            if(password_verify($password, $vendedor['password'])){
                echo json_encode(['STATUS' => 'SUCCESS', 'MESSAGE' => 'success', 'VENDEDOR' => $vendedor]);
            }else {
                echo json_encode(['STATUS' => 'ERROR', 'MESSAGE' => 'Contraseñas no coinciden']);
            }
        }else{
            echo json_encode(['STATUS' => 'ERROR', 'MESSAGE' => 'No se encontro usuario']);
        }
    }else{
        http_response_code(400);
        echo 'Invalid Data';
    }
?>