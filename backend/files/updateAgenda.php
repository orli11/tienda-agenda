<?php
include("../config/conexion.php");
$conn = conectar();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Actualizar</title>
</head>
<body>
<?php
if (isset($_POST['enviar'])) {
    $id_conferencia = $_POST['id_conferencia'];
    $nombre_con = $_POST['nombre_con'];
    $nombre_pon = $_POST['nombre_pon'];
    $especialidad_pon = $_POST['especialidad_pon'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $area = $_POST['area'];

    // Utilizando consultas preparadas para prevenir la inyección SQL
    $queryUpdate = "UPDATE conferencia SET 
                     nombre_con=?,
                     nombre_pon=?,
                     especialidad_pon=?,
                     lugar=?,
                     fecha=?,
                     hora=?,
                     area=?
                      WHERE 
                     id_conferencia=?";

    $stmt = mysqli_prepare($conn, $queryUpdate);
    mysqli_stmt_bind_param($stmt, "sssssssi", $nombre_con, $nombre_pon, $especialidad_pon, $lugar, $fecha, $hora, $area, $id_conferencia);

    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        header('location: ../../agendaInicial.html');
    } else {
        echo 'Error al actualizar los datos: ' . mysqli_error($conn);
    }
} else {

    $id_conferencia = $_GET['id_conferencia'];
    $query = "SELECT * FROM conferencia WHERE id_conferencia=?";
    
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id_conferencia);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    
    if ($even = mysqli_fetch_array($resultado)) {
        ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> Datos</h1>
                    <form action="" method="post">
                        <input type="hidden"
                               name="id_conferencia"
                               class="form-control mb-3"
                               placeholder="id_conferencia"
                               value="<?php echo $even['id_conferencia'] ?>">

                        <input type="text"
                               name="nombre_con"
                               class="form-control mb-3"
                               placeholder="Nombre Conferencia"
                               value="<?php echo $even['nombre_con'] ?>">

                        <input type="text"
                               name="nombre_pon"
                               class="form-control mb-3"
                               placeholder="Nombre Ponente"
                               value="<?php echo $even['nombre_pon'] ?>">

                        <input type="text"
                               name="especialidad_pon"
                               class="form-control mb-3"
                               placeholder="Especialidad del Ponente"
                               value="<?php echo $even['especialidad_pon'] ?>">

                        <input type="text"
                               name="lugar"
                               class="form-control mb-3"
                               placeholder="Lugar del evento"
                               value="<?php echo $even['lugar'] ?>">

                        <input type="date"
                               name="fecha"
                               class="form-control mb-3"
                               placeholder="Fecha del evento"
                               value="<?php echo $even['fecha'] ?>">

                        <input type="text"
                               name="hora"
                               class="form-control mb-3"
                               placeholder="Hora del evento"
                               value="<?php echo $even['hora'] ?>">

                        <input type="text"
                               name="area"
                               class="form-control mb-3"
                               placeholder="Area del evento"
                               value="<?php echo $even['area'] ?>">

                        <input type="submit"
                               name="enviar"
                               class="btn btn-primary"
                               style="width: 100%;"
                               value="Guardar">
                    </form>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo 'No se encontró la conferencia';
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
