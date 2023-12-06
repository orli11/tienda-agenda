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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Actualizar </title>
  </head>
  <body>
    <?php 
     if(isset($_POST['enviar'])) {
      $nombre_con = $_POST['nombre_con'];
      $nombre_pon = $_POST['nombre_pon'];
      $especialidad_pon = $_POST['especialidad_pon'];
      $lugar = $_POST['lugar'];
      $dia = $_POST['dia'];
      $mes = $_POST['mes'];
      $anio = $_POST['anio'];
      $hora = $_POST['hora'];
      $area = $_POST['area'];
      $fecha = sprintf('%04d-%02d-%02d', $anio, $mes, $dia);
      $query = "UPDATE conferencia SET 
                 nombre_con='$nombre_con',
                 nombre_pon='$nombre_pon',
                 especialidad_pon='$especialidad_pon',
                 lugar='$lugar',
                 dia = '$dia',
                 mes = '$mes',
                 anio = '$anio',
                 fecha='$fecha',
                 hora='$hora',
                 area='$area'
                  WHERE 
                 id_conferencia='$id_conferencia'";

      $resultado =mysqli_query($conn, $query);
      if($resultado) {
        Header('location: agendaInicial.html');
      } else {
        echo 'No se actualizaron los datos';
      }
     } else {
    
      $id_conferencia = $_GET['id_conferencia'];
      $query = "SELECT * FROM conferencia WHERE id_conferencia='$id_conferencia'";
  
      $resultado = mysqli_query($conn, $query);
      $even = mysqli_fetch_array($resultado);
     
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
                    
                                        <input type="text"
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

                                    <?php
                                    }
                                    ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
    