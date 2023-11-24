<?php 
    function conectar(){ 
        $host='localhost:8889';
        $user='root';
        $pass='root';
        $db='tienda_agenda';

        $conn = mysqli_connect($host, $user, $pass, $db);
        return $conn;
        echo json_encode(['STATUS' => 'DB: CONEXION ESTABLECIDA']);
}
?>