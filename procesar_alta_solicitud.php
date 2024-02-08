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
$siguienteId = 1 + $ultima_id;

// Recuperar datos del formulario
session_start();
$nombreSolicitud = $_POST["nombreSolicitud"];
$descripcion = $_POST["desc"];
$presupuesto = $_POST['presupuesto'];
$prioridad = $_POST['prioridad'];
date_default_timezone_set('America/Mexico_City'); 
$fechaHoy = date("d/m/Y"); // Formato: Año-Mes-Día
$fechaHoraActual = date('d/m/Y H:i');
$estadoInicial = "En curso";
$responsable = $_SESSION["usuario"];
echo "$nombreSolicitud";

// Insertar datos en la tabla Solicitudes
try {
    // Query de inserción en la primera tabla (solicitudes)
    $sql1 = "INSERT INTO solicitudes (id, nombreSolicitud, descripcion, responsable, fecha, estado, presupuesto, prioridad) 
                             VALUES ('$siguienteId', '$nombreSolicitud', '$descripcion', '$responsable', '$fechaHoy', '$estadoInicial', '$presupuesto', '$prioridad')";

    if ($conn->query($sql1) === TRUE) {
        // Si la primera inserción fue exitosa, proceder con la segunda tabla
        // Query de inserción en logsolicitudes
        $sql2 = "INSERT INTO logsolicitudes (fecha, usuario, accion, solicitud) 
                                     VALUES ('$fechaHoraActual', '$responsable', 'creacion', '$nombreSolicitud')";

        if ($conn->query($sql2) === TRUE) {
            // Ambas inserciones fueron exitosas, confirmar la transacción
            $conn->commit();            
        } else {
            // Si la segunda inserción falla, revertir la transacción
            $conn->rollback();
            $message = "Error en la segunda tabla, transacción revertida";
        }
    } else {
        // Si la primera inserción falla, revertir la transacción
        $conn->rollback();
        $message = "Solicitud no creada, transacción revertida";
    }

    // Redirigir al usuario a una página de confirmación
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: solicitudes.php");
    exit();
} catch (Exception $e) {
    // Manejo de excepciones: revertir la transacción en caso de error
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

$conn ->close();
?>