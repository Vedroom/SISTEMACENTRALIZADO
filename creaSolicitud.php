<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear solicitud</title>
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
  <!----------------------Bootstrap--------------------------------------->
  <link rel="stylesheet" href="css/styledasg.css">
  <style>
    .boton {
      padding-left: 12px;
      padding-top: 12px;
    }

    .boton a {
      text-decoration: none;
    }

    .formularios {
      padding-left: 332px;
    }

    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow navegador">
    <a href="menu.php" class="navbar-brand col-md-3 col-lg-2 mr-0 px-3"><img src="img/Massey-mavepoLOGOBLANCO.png"
        alt="" class="imglogo"></a>
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
                  <a class="btn btn-sm btn-block text-left" href="altas_tractores.php">Tractores</a>
                </li>
                <li class="list-group-item" id="nivel2">
                  <a class="btn btn-sm btn-block text-left" href="altas_ref.php">Refacciones</a>
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

    function validarFormulario() {
      var prioridad = document.getElementById("prioridad").value;

      if (prioridad === "") {
        alert("Por favor, selecciona una prioridad válida.");
        return false; // Evitar el envío del formulario
      }
      return true; // Permitir el envío del formulario si se ha seleccionado una prioridad válida
    }

    // Obtener el formulario y agregar un escucha de evento submit
    document.getElementById("datosSolicitud").addEventListener("submit", function (event) {
      // Validar el formulario antes del envío
      if (!validarFormulario()) {
        event.preventDefault(); // Evitar el envío del formulario
      }
    });

  </script>
  <!---------------------------Navegador vertical-------------------------------------------->
  <!---------------------------Contenido principal-------------------------------------------->
  <!-----------------------------Alta de usuarios------------------------------------------>
  <div class="container mt-5 formularios">
    <h2 class="mb-4">Crear solicitud</h2>
    <form id="datosSolicitud" action="procesar_alta_solicitud.php" onsubmit="return validarFormulario();" method="post" enctype="multipart/form-data">
      <!--------------------------Usuario---------------------------->
      <div class="form-group">
        <label for="nombreSolicitud">Nombre de Solicitud:</label>
        <input type="text" class="form-control" name="nombreSolicitud" required>
      </div>
      <!-----------------------------Descripción de la solicitud---------------------------->
      <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <input type="text" class="form-control" name="desc" required>
      </div>
      <!----------------------------Presupuesto estimado---------------------------------->
      <div class="form-group">
        <label for="nombre">Presupuesto:</label>
        <input type="number" class="form-control" name="presupuesto" required>
      </div>
      <!----------------------------Prioridad------------------------------------------->
      <div class="form-group">
        <label for="Prioridad">Prioridad:</label>
        <select name="prioridad" id="prioridad">
          <option value="" selected disabled>Selecciona la prioridad</option>
          <option value="Alta">Alta</option>
          <option value="Media">Media</option>
          <option value="Baja">Baja</option>
        </select><br>
      </div>
      <!----------------------------Archivo de cotización------------------------------->
      <div class="file-input-container">
        <label for="Prioridad">Archivo de cotización:</label><br>
        <label for="archivo" class="upload-btn">
          <span class="upload-icon">📂</span>
          <span class="upload-text" id="nameDoc">Seleccionar Archivo</span>
        </label>
        <input type="file" name="archivo" id="archivo" class="inputfile" acept=".pdf" required>
      </div>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
          // Obtener el input de tipo archivo y el elemento de nombre del archivo
          const fileInput = document.getElementById('archivo');
          const contenedor = document.getElementById("nameDoc");

          // Agregar un escucha de eventos para el cambio en el input de archivo
          fileInput.addEventListener('change', function () {
            // Actualizar el nombre del archivo en el elemento de visualización            
            contenedor.textContent =fileInput.files[0].name;
          });
        });
      </script>
      <!-------------------- Botones del formulario ------------------------------------->
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Registrar</button>
        <a href="#" class="btn btn-secondary" onclick="window.history.back();">Cancelar</a>
      </div>
    </form>
  </div><!-----------------------------Alta de usuarios------------------------------------------>

  <!---------------------------Contenido principal-------------------------------------------->
</body>

</html>