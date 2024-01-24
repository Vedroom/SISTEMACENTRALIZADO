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
        <a href="#" class="navbar-brand col-md-3 col-lg-2 mr-0 px-3"><img src="img/Massey-mavepoLOGOBLANCO.png" alt="" class="imglogo"></a>
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
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Ventas <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item boton" >
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
<!---------------------------Navegador vertical-------------------------------------------->
<!-----------------------------Alta de usuarios------------------------------------------>
<div class="container mt-5 formularios">
        <h2 class="mb-4">Alta de Usuario</h2>
        <form action="procesar_alta_usuario.php" method="post">
          <!--------------------------Usuario---------------------------->
        <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" name="usuario" required>
            </div>
          <!-----------------------------Contraseña del usuario---------------------------->
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" class="form-control" name="contrasena" required>
            </div>
          <!----------------------------Nombre del usuario---------------------------------->
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <!----------------------------Sucursal------------------------------------------->
            <label for="sucursal">Sucursal:</label>
            <select name="sucursal" id="sucursal">
              <option value="SLP">Matriz San Luis Potosi</option>
              <option value="RioVerde">RioVerde,SLP</option>
              <option value="CDValles">Ciudad Valles</option>
              <option value="SLPaz">San Luis de la Paz</option>
              <option value="Gpe">Guadalupe,Zac</option>
              <option value="Fresnillo">Fresnillo,Zac</option>
              <option value="Loreto">Loreto,Zac</option>
              <option value="Ebano">Ebano,SLP</option>
              <option value="Salinas">Salinas,SLP</option>
              <option value="Guzman">Guzman</option>
              <option value="Colima">Colima</option>
              <option value="Autlan">Autlan</option>
            </select><br>
            <!----------------------------Roles------------------------------------------------>
            <label for="id_rol">ID Rol:</label>
            <select id="id_rol" name="id_rol">
              <option value="1">Administrador</option>
              <option value="2">Lectura</option>
              <option value="3">Usuario regular</option>
        <!-- Agrega más opciones según sea necesario -->
            </select>
            <!-- Botones del formulario -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a href="#" class="btn btn-secondary" onclick="window.history.back();">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>