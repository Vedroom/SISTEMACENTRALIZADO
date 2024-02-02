<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="img/3 PRUEBA-12.png" type="image/x-icon">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
     <!----------------------Bootstrap---------------------------------------->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      <!----------------------Bootstrap--------------------------------------->
      <link rel="stylesheet" href="css/styledasg.css">
      <style>
        .boton{
          padding-left: 12px;
          padding-top: 12px;
        }
        .boton a{
          text-decoration: none;
        }
        .formularios{
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
        <a href="menu.php" class="navbar-brand col-md-3 col-lg-2 mr-0 px-3"><img src="img/Massey-mavepoLOGOBLANCO.png" alt="" class="imglogo"></a>
        <button class="navbar-toggler position-absolute d-md-none collapesed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanden="false" aria-label="Toggle navegation">
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
              <p style="color: aliceblue;"><?php echo $_SESSION["nombre"]; ?></p>
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
                  <a class="btn btn-sm btn-block text-left" href="#">Item 1</a>
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
                  <a class="btn btn-sm btn-block text-left" href="ventas_tractores.php">Tractores</a>
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
<!-----------------------------Alta de usuarios------------------------------------------>
<?php
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["id"])) {
    // Redirigir al usuario al formulario de inicio de sesión si no ha iniciado sesión
    header("Location: login.php");
    exit();
}

// Obtener el ID de usuario de la sesión
$idUsuario = $_SESSION["id"];
?>
<div class="container formularios">
<h2><strong>Subir Venta</strong></h2>
    <form action="procesar_venta.php" method="post" id="ventaForm">
      <div class="form-group">
      <label for="modelo">Modelo</label>
      <select class="form-control" name="modelo" id="modelo" onchange="cargarSeries()">
      <option value="">Seleccione un modelo</option>
      <!-- Aquí se cargarán dinámicamente las opciones de modelo -->
    </select>
      </div>

      <div class="form-group">
      <label for="serie">Serie:</label>
      <select class="form-control" name="serie" id="serie">
      <option value="">Seleccione una serie</option>
      </select>
      </div>

      <div class="form-group">
      <label for="canitdad">Cantidad:</label>
      <input type="number" class="form-control" name="cantidad" id="canitdad" required>
      </div>
    
      <div class="form-group">
      <label for="precio">Precio unitario:</label>
      <input type="number" class="form-control" name="precio" id="precio" step="0.01" required>
      </div>

      <div class="form-group">
      <label for="fecha">Fecha:</label>
      <input type="date" class="form-control" name="fecha" id="fecha" required>
      </div>

        <!-- Campo oculto para enviar el ID del usuario -->
        <input type="hidden" name="id_usuario" value="<?php echo $idUsuario; ?>">

        <input type="submit" class="btn btn-primary" value="Subir Venta">
    </form>
    <script>
    function cargarModelos() {
        var modeloSelect = document.getElementById("modelo");

        // Limpiar las opciones de modelos
        modeloSelect.innerHTML = '<option value="">Cargando modelos...</option>';

        // Realizar una petición AJAX para obtener los modelos
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "obtener_modelos.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Si la petición es exitosa, actualizar las opciones de modelo
                    modeloSelect.innerHTML = xhr.responseText;
                } else {
                    // Si hay un error, mostrar un mensaje
                    modeloSelect.innerHTML = '<option value="">Error al cargar modelos</option>';
                }
            }
        };
        xhr.send();
    }

    // Llamar a la función para cargar los modelos cuando la página se carga
    window.onload = cargarModelos;
</script>
<script>
    function cargarSeries() {
        var modeloSeleccionado = document.getElementById("modelo").value;
        var serieSelect = document.getElementById("serie");

        // Limpiar las opciones de serie
        serieSelect.innerHTML = '<option value="">Cargando series...</option>';

        // Realizar una petición AJAX para obtener las series del modelo seleccionado
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "obtener_series.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Si la petición es exitosa, actualizar las opciones de la serie
                    serieSelect.innerHTML = xhr.responseText;
                } else {
                    // Si hay un error, mostrar un mensaje
                    serieSelect.innerHTML = '<option value="">Error al cargar las series</option>';
                }
            }
        };
        xhr.send("modelo=" + encodeURIComponent(modeloSeleccionado));
    }
</script>
</div>
</body>
</html>