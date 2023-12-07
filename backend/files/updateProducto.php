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

    <title>Actualizar Producto</title>
</head>
<body>
<?php
if (isset($_POST['enviar'])) {
  $nombre_vendedor = $_POST['nombre_vendedor'];
  $nombre_prod = $_POST['nombre_prod'];
  $facebook = $_POST['facebook'];
  $telefono_vendedor = $_POST['telefono_vendedor'];
  $precio = $_POST['precio'];
  $descripcion_prod = $_POST['descripcion_prod'];

  $queryUpdate = "UPDATE productos SET
                    nombre_vendedor =?
                    nombre_prod =?
                    facebook=?
                    telefono_vendedor=?
                    precio=?
                    descripcion_prod=?
                      WHERE 
                    id_prod=?";

      $stmt = mysqli_prepare($conn, $queryUpdate);
      mysqli_stmt_bind_param($stmt, "sssssssi", $nombre_vendedor, $nombre_prod, $facebook, $telefono_vendedor, $precio, $descripcion_prod);

      $resultado = mysqli_stmt_execute($stmt);

      if ($resultado) {
        header('location: ../../tiendaVendedor.php');
    } else {
        echo 'Error al actualizar los datos: ' . mysqli_error($conn);
    }
} else {
        $id_prod = $_GET['id_prod'];
        $query = "SELECT * FROM productos WHERE id_prod=?";

        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $id_prod);
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
                                 name="id_prod"
                                 class="form-control mb-3"
                                 placeholder="id_prod"
                                 value="<?php echo $even['id_prod'] ?>">
  
                          <input type="text"
                                 name="nombre_vendedor"
                                 class="form-control mb-3"
                                 placeholder="Nombre Vendedor"
                                 value="<?php echo $even['nombre_vendedor'] ?>">
  
                          <input type="text"
                                 name="facebook"
                                 class="form-control mb-3"
                                 placeholder="Facebook"
                                 value="<?php echo $even['facebook'] ?>">
  
                          <input type="text"
                                 name="telefono_vendedor"
                                 class="form-control mb-3"
                                 placeholder="Telefono del vendedor"
                                 value="<?php echo $even['telefono_vendedor'] ?>">
  
                          <input type="text"
                                 name="precio"
                                 class="form-control mb-3"
                                 placeholder="Precio"
                                 value="<?php echo $even['precio'] ?>">
  
                          <input type="text"
                                 name="descripcion_prod"
                                 class="form-control mb-3"
                                 placeholder="Descripción del producto"
                                 value="<?php echo $even['descripcion_prod'] ?>">
  
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
          echo 'No se encontró el producto';
      }
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
  </body>
  </html>