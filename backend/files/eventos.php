<?php 
    include("conexion.php");
    $conn = conectar();
    $sqlSelect = "SELECT * FROM conferencia";
    $result = mysqli_query($conn, $sqlSelect);
    $json = mysqli_query($conn, $sqlSelect);
    $json = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc())
        {
            array_push($json, (object) $row);
        }
    } else{
        $json = array('status' => "No se encontraron registros");
    }

    echo json_encode($json);
  
?>