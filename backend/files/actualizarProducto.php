<?php 
include("../config/conexion.php");
$conn = conectar();

$nombre_vendedor = $_POST['nombre_vendedor'];
$nombre_prod = $_POST['nombre_prod'];
$facebook = $_POST['facebook'];
$telefono_vendedor = $_POST['telefono_vendedor'];
$precio = $_POST['precio'];
$descripcion_prod = $_POST['descripcion_prod'];

$query = "UPDATE productos SET 
             nombre_vendedor='$nombre_vendedor',
             facebook='$facebook',
             telefono_vendedor='$telefono_vendedor',
             nombre_prod='$nombre_prod',
             precio = '$precio',
             descripcion_prod = '$descripcion_prod'
          WHERE 
             id_prod='$id_prod'";

$resultado = mysqli_query($conn, $query);
if($resultado) {
    Header('location: tiendaVendedor.php');
} else {
    echo 'No se actualizaron los datos';
}
?>
