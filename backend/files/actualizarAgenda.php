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

 $query = "UPDATE conferencia SET 
                 nombre_con='$nombre_con',
                 nombre_pon='$nombre_pon' 
                 especialidad_pon='$especialidad_pon',
                 lugar='$lugar',
                 fecha='$fecha',
                 hora='$hora',
                 area='$area'
                  WHERE 
                 id_conferencia='$id_conferencia'";

 $resultado =mysqli_query($conn, $query);
 if($resultado) {
     Header('location: agendaInicial.html');
 } else {
     echo 'Incorrecto';
 }
?>

