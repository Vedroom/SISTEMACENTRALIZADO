<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitudes</title>
  <link rel="shortcut icon" href="img/3 PRUEBA-12.png" type="image/x-icon">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
  <!----------------------Bootstrap---------------------------------------->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!----------------------Bootstrap--------------------------------------->
  <link rel="stylesheet" type="text/css" href="css/styledasg.css">
  <style>
    .boton {
      padding-left: 12px;
      padding-top: 12px;
    }

    .boton a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow navegador">
    <a href="menu.php" class="navbar-brand col-md-3 col-lg-2 mr-0 px-3"><img src="img/Massey-mavepoLOGOBLANCO.png" alt=""
        class="imglogo"></a>
    <button class="navbar-toggler position-absolute d-md-none collapesed" type="button" data-toggle="collapse"
      data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanden="false" aria-label="Toggle navegation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <?php
        session_start();
        // Verificar si el usuario ha iniciado sesión
        if (!isset($_SESSION["usuario"])) {
          // Si no ha iniciado sesión, redirigir al formulario de inicio de sesión
          header("Location: login.php");
          exit();
        }
        ?>
        <!------------------------Identificacion del usuario de la sesion------------->
        <p style="color: aliceblue;">
          <?php echo $_SESSION["nombre"]; ?>
        </p>
      </li>
    </ul>
  </nav>
  <!---------------------------Navegador vertical-------------------------------------------->
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#" id="ventasToggle">
                <span data-feather="users"></span>
                Ventas
              </a>
              <ul class="list-group collapse fade" id="ventasCollapse">
                <li class="list-group-item" id="nivel2">
                  <a class="btn btn-sm btn-block text-left" href="ventas_tractores.php">Tractores</a>
                </li>
                <li class="list-group-item" id="nivel2">
                  <a class="btn btn-sm btn-block text-left" href="#">Item 2</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" id="dashboardToggle">
                <span data-feather="users"></span>
                Dashboard
              </a>
              <ul class="list-group collapse fade" id="dashboardCollapse">
                <li class="list-group-item" id="nivel2">
                  <a class="btn btn-sm btn-block text-left" href="#">Item 1</a>
                </li>
                <li class="list-group-item" id="nivel2">
                  <a class="btn btn-sm btn-block text-left" href="#">Item 2</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="solicitudesToggle">
                <span data-feather="users"></span>
                Solicitudes
              </a>
              <ul class="list-group collapse fade" id="solicitudesCollapse">
                <li class="list-group-item" id="nivel2">
                  <a class="btn btn-sm btn-block text-left" href="solicitudes.php">Ver solicitudes</a>
                </li>
                <li class="list-group-item" id="nivel2">
                  <a class="btn btn-sm btn-block text-left" href="creaSolicitud.php">Crear solicitud</a>
                </li>
              </ul>
            </li>
            <?php
            if ($_SESSION["id_rol"] == 1) {
              echo '<li class="nav-item">
                                  <a class="nav-link" href="configuracion.php">
                                      <span data-feather="users"></span>
                                      Configuracion
                                  </a>
                              </li>';
            }
            ?>
            <li class="nav-item boton">
              <?php
              // Botón de salir
              echo '<button class="btn-primary btn"><a href="logout.php" style="color: aliceblue;">Salir</a></button>';
              ?>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <script>
    //Desplegar opciones respectivas
    $(document).ready(function () {
      $('#ventasToggle').click(function () {
        $('#ventasCollapse').toggleClass('show');
      });
      $('#dashboardToggle').click(function () {
        $('#dashboardCollapse').toggleClass('show');
      });
      $('#solicitudesToggle').click(function () {
        $('#solicitudesCollapse').toggleClass('show');
      });
    });
  </script>
  <!---------------------------Navegador vertical-------------------------------------------->
  <!-----------------------------Contenido principal------------------------------->


  <?php
  #PROCESAMIENTO DE DATOS, PARA OBTENER LOS REGISTROS DE SOLICITUD
  include("db.php");
  $cuenta_solicitudes = "SELECT * FROM  solicitudes";
  $resultado_busca_solicitudes = mysqli_query($con, $cuenta_solicitudes);
  $numero_solicitudes = mysqli_num_rows($resultado_busca_solicitudes);

  //Consultando la id de la primer solicitud para empezar la consulta desde ahí
  $consulta_primer_solicitud = "SELECT * FROM `solicitudes`";
  $resultado_primer_solicitud = mysqli_query($con, $consulta_primer_solicitud);
  $registro_primer_solicitud = mysqli_fetch_array($resultado_primer_solicitud, MYSQLI_ASSOC);
  $primer_id = $registro_primer_solicitud['id'];

  //Obteniendo la ultima id para parar
  $numero_de_proyectos = mysqli_num_rows($resultado_primer_solicitud);
  $ultima_id = $primer_id + ($numero_solicitudes - 1);
  $indice = 1;
  ?>

  <div class="container">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Solicitud</th>
          <th scope="col">Responsable</th>
          <th scope="col">Fecha</th>
          <th scope="col">Estado</th>
          <th scope="col">Presupuesto</th>
          <th scope="col">Prioridad</th>
        </tr>
      </thead>
      <tbody>

        <?php

        //Indice para numerar los renglones
        $indice = 1;

        //Define la clase dependiendo del estado asignado
        function asignarClaseEstado($estado)
        {
          switch ($estado) {
            case 'Listo':
              return 'bg-success text-white';
            case 'Detenido':
              return 'bg-danger text-white';
            case 'En curso':
              return 'bg-warning text-dark';
            default:
              // Si el estado no coincide con ninguno de los casos anteriores, puedes devolver una clase por defecto.
              return 'bg-default';
          }
        }

        //Define la clase dependiendo la prioridad asignada
        function asignarClasePrioridad($estado)
        {
          switch ($estado) {
            case 'Alta':
              return 'bg-primary text-white';
            case 'Media':
              return 'bg-info text-white';
            case 'Baja':
              return 'bg-secondary text-white';
            default:
              // Si el estado no coincide con ninguno de los casos anteriores, puedes devolver una clase por defecto.
              return 'bg-default';
          }
        }
    
        //Recorre los registros
        for ($primer_id; $primer_id <= $ultima_id; $primer_id++) {


          //Obtiene datos de la solicitud
          $busca_solicitud = "SELECT * FROM `solicitudes` WHERE id='$primer_id'";
          $result = mysqli_query($con, $busca_solicitud);
          $rows = mysqli_num_rows($result);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          //Datos del QRY
          $nombre = (string) $row['nombreSolicitud'];
          $responsable = $row['responsable'];
          $fecha = $row['fecha'];
          $estado = $row['estado'];
          $presupuesto = $row['presupuesto'];
          $prioridad = $row['prioridad'];

          // Define la clase del registro, segun su estado/prioridad
          $claseEstado = asignarClaseEstado($estado);
          $clasePrioridad = asignarClasePrioridad($prioridad);


          ?>

        <tr class="clickeable" data-name="<?php echo $nombre; ?>">
          <th scope="row">
            <?php echo $indice;
            $indice++; ?>
          </th>
          <td>
            <?php echo mb_strtoupper($nombre, 'UTF-8'); ?>
          </td>
          <td>
            <?php echo $responsable; ?>
          </td>
          <td>
            <?php echo $fecha; ?>
          </td>
          <td class="<?php echo $claseEstado; ?>">
            <?php echo $estado; ?>
          </td>
          <td>
            <?php echo $presupuesto; ?>
          </td>
          <td class="<?php echo $clasePrioridad; ?>">
            <?php echo $prioridad; ?>
          </td>
        </tr>
        <?php } ?>

        <script>
          document.addEventListener("DOMContentLoaded", function () {
            // Obtiene todas las filas clickeables
            var filasClickeables = document.querySelectorAll(".clickeable");

            // Agrega un evento de clic a cada fila
            filasClickeables.forEach(function (fila) {
              fila.addEventListener("click", function () {
                // Obtiene el nombre de la solicitud desde el atributo data-id
                var nombreSolicitud = fila.getAttribute("data-name");

                // Redirige a la página de detalles con el nombre de la solicitud
                window.location.href = "verSolicitud.php?nombre=" + nombreSolicitud;
              });
            });
          });
        </script>


      </tbody>
    </table>
  </div>

  <!-----------------------------Contenido principal------------------------------->
</body>

</html>