<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- Fuentes google -->
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
    crossorigin="crossorigin" as="font">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">

  <title>Agenda de eventos</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="./img/UGTO.png" alt="escudo ug" width="30" height="auto">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="inicioAgenda.html">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="tiendaLogin.html">Tienda</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="#">Cerrar sesión</a>
          </li> 
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style="max-width: 95vw!important;">
    <div class="row" style="height: 10vh;">

    </div>
    <div class="row" style="height: 90vh;">
        <div class="col-5">
          <!--Formulario ponencia-->
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-12 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form action="./backend/files/registro_agenda.php" method="post">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fa-solid fa-shop fa-2x me-3 icono-tienda"></i>
                      <span class="h1 fw-bold mb-0">Registro de evento</span>
                    </div>

                    <div class="col-md-12 form-outline mb-4">
                      <input type="text" id="nombre_con" name="nombre_con" class="form-control form-control-lg"
                        placeholder="Escribe el nombre del evento" />
                      <label class="form-label" for="nombre_con">Nombre del evento </label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="nombre_pon" name="nombre_pon" class="form-control form-control-lg"
                        placeholder="Escribe el nombre del ponente" />
                      <label class="form-label" for="nombre_pon">Nombre del ponente</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="especialidad_pon" name="especialidad_pon" class="form-control form-control-lg"
                        placeholder="Escribe el nombre del ponente" />
                      <label class="form-label" for="especialidad_pon">Especialidad del ponente</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="lugar" name="lugar" class="form-control form-control-lg"
                        placeholder="Escribe la ubicacion del evento" />
                      <label class="form-label" for="lugar">Lugar del evento</label>
                    </div>
                    <div class="row">
                      <div class="col mb-3 rounded">
                        <select class="form-control" id="dia" name="dia">
                          <option value="">Día</option>
                          <!-- Las opciones se generarán dinámicamente -->
                        </select>
                      </div>
                      <div class="col mb-3 rounded">
                        <select class="form-control" id="mes" name="mes">
                          <option value="">Mes</option>
                          <!-- Las opciones se generarán dinámicamente -->
                        </select>
                      </div>
                      <div class="col mb-3 rounded">
                        <select class="form-control" id="anio" name="anio">
                          <option value="">Año</option>
                          <!-- Las opciones se generarán dinámicamente -->
                        </select>
                      </div>
                      <label class="form-label" for="fecha">Fecha</label>
                    </div> 
                      <div class="form-outline mb-4">
                        <input type="text" id="hora" name="hora" class="form-control form-control-lg"
                          placeholder="Escribe la hora en formato 00:00:00" />
                        <label class="form-label" for="hora">Hora</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="text" id="area" name="area" class="form-control form-control-lg"
                          placeholder="Escribe el area EE/DP/CYEE/AC/FCEI" />
                        <label class="form-label" for="area">Área de créditos</label>
                    </div>
                    <!-- Button -->
                    <div class="pt-1 mb-3 text-center">
                      <button class="btn btn-primary btn-lg btn-block fw-bold">Registrar</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-7">
            <!-- Listado de eventos registrados -->
            <p class="text-center" style="color: aliceblue;">Eventos registrados</p>
            <table class="table table-hover table-light">
              <thead>
                <tr>
                  <th >Nombre del evento</th>
                  <th >Nombre del ponente</th>
                  <th >Especialidad del ponente</th>
                  <th >Lugar del evento</th>
                  <th >Fecha</th>
                  <th >Hora</th>
                  <th >Área</th>
                  <th >Acciones</th>
                </tr>
              </thead>
              <tbody id="eventosBody">
              </tbody>
            </table>  
                    <template id="templateEvents">
                      <tr>
                        <td >Nombre del evento</td>
                        <td >Nombre del ponente</td>
                        <td >Especialidad del ponente</td>
                        <td >Lugar del evento</td>
                        <td >Fecha</td>
                        <td >Hora</td>
                        <td >Área</th>
                        <td>
                          <div class="d-flex justify-content-between align-items-center">
                              <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editaModal">
                                <i class="bi bi-arrow-clockwise"></i>
                              </a>
                              <a  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="">
                                <i class="bi bi-trash"></i>
                              </a>
                          </div> 
                          <div class="modal fade" id="editaModal" tabindex="-1" aria-labelledby="editaModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-tittle fs-5" id="editaModalLabel"> Editar registro </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="actualizarAgenda.php" method="post">
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
                                        value="Guardar" 
                                        class="btn btn-primary"
                                        style="width: 100%;">
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="backend/files/deleteAgenda.php" method="post">
                                            <input type="hidden" name="id_conferencia" id="id_conferencia">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>            
                                </div>
                            </div>
                        </div>
    
                          <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-tittle fs-5" id="eliminaModalLabel"> Eliminar registro </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Deseas eliminar el registro?
                                    </div>
                                    <div class="modal-footer">
                                        <form action="backend/files/deleteAgenda.php" method="post">
                                            <input type="hidden" name="id_conferencia" id="id_conferencia">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>            
                                </div>
                            </div>
                        </div>                         
                        </td>
                      </tr> 
                  </template>
        </div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/agendaRegistro.js"></script>
    <script src="./js/appAgenda.js"></script>
    <script src="./backend/files/updateAgenda.php"></script>
    
</body>
</html>
