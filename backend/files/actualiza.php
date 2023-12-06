<?php 
 include("../config/conexion.php");
 $conn = conectar();

 $id_vendedor = $_POST['id_vendedor']
 $nombre_ven = $_POST['nombre_vendedor'];
 $facebook = $_POST['facebook']
 $telefono_ven = $_POST['telefono_vendedor'];
 $nombre_prod = $_POST['nombre_prod'];
 $precio = $_POST['precio'];
 $desripcion = $_POST['descripcion'];
 
 $query = "UPDATE productos SET 
                 nombre_vendedor='$nombre_ven',
                 facebook='$facebook',
                 telefono_vendedor='$telefono_ven',
                 nombre_prod='$nombre_prod,
                 precio = '$precio',
                 descripcion = '$descripcion',
                  WHERE 
                 id_vendedor='$id_vendedor'";

 $resultado =mysqli_query($conn, $query);
 if($resultado) {
     Header('location: agendaInicial.html');
 } else {
     echo 'No se actualizaron los datos';
 }
?>