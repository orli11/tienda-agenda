<?php
    include("../config/conexion.php");

    $conn = conectar();

    $nombre_con = $_POST['nombre_con'];
    $nombre_pon = $_POST['nombre_pon'];
    $especialidad_pon = $_POST['especialidad_pon'];
    $lugar = $_POST['lugar'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    $hora = date("H:i:s");
    $area = $_POST['area'];
    $fecha = sprintf('%04d-%02d-%02d', $anio, $mes, $dia);

    $queryInsertar = "INSERT INTO conferencia VALUES(null, '$nombre_con', '$nombre_pon', '$especialidad_pon', '$lugar', '$fecha', '$hora', '$area')";
    $result = mysqli_query($conn, $queryInsertar);
    
    if($result) {
        echo json_encode(['STATUS' => 'SUCCESS', 'MESSAGE' => 'Evento Registrado']);
        Header("location: ../../agendaInicial.html");
    } else {
        echo json_encode(['STATUS' => 'ERROR']);
        Header("location: ../../agendaInicial.html?error=true");
    } 
?>