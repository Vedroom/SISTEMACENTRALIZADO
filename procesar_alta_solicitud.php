<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mavepo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

// Recuperar datos del formulario
session_start();
$nombreSolicitud = $_POST["nombreSolicitud"];
$descripcion = $_POST["desc"];
$presupuesto = $_POST['presupuesto'];
$prioridad = $_POST['prioridad'];
$fechaHoy = date("d/m/Y"); // Formato: Año-Mes-Día
$estadoInicial = "En curso";
$responsable = $_SESSION["usuario"];
echo "$nombreSolicitud";

// Insertar datos en la tabla "usuario"
$sql = "INSERT INTO solicitudes (nombreSolicitud, descripcion, responsable, fecha, estado, presupuesto, prioridad) 
                      VALUES ('$nombreSolicitud', '$descripcion','$responsable', '$fechaHoy', '$estadoInicial', '$presupuesto', '$prioridad')";

if ($conn->query($sql) === TRUE) {
    $message = "Solicitud creada";
    echo "<script type='text/javascript'>
        alert('$message');
    </script>";
    header("Location: solicitudes.php");
    exit();
} else {
    // Redirigir al usuario a una página de error
    $message = "Solicitud no creada";
    echo "<script type='text/javascript'>
        alert('$message');
    </script>";
    header("Location: solicitudes.php");
    exit();
}
?>