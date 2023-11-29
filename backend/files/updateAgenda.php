<?php
    include("../config/conexion.php");
    $conn = conectar();
    $id_conferencia = $_GET['id_conferencia'];
    $query = "SELECT * FROM conferencia WHERE id_conferencia='$id_conferencia'";

    $resultado = mysqli_query($conn, $query);
    $even = mysqli_fetch_array($resultado);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Actualizar </title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"> Datos</h1>
                <form action="./backend/files/actualizarAgenda.php" method="post">
                    <input type="hidden"
                    name="id_conferencia"
                    class="form-control mb-3"
                    placeholder="id_conferencia"
                    value="<?php echo $even['id_conferencia'] ?>">

                    <input type="text"
                    name="nombre_con"
                    class="form-control mb-3"
                    placeholder="nombre_conferencista"
                    value="<?php echo $even['nombre_con'] ?>">

                    <input type="text"
                    name="nombres"
                    class="form-control mb-3"
                    placeholder="nombres"
                    value="<?php echo $alumno['nombres'] ?>">

                    <input type="text"
                    name="apellidos"
                    class="form-control mb-3"
                    placeholder="apellidos"
                    value="<?php echo $alumno['apellidos'] ?>">
                    
                    <input type="submit" 
                    value="Guardar" 
                    class="btn btn-primary"
                    style="width: 100%;">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>