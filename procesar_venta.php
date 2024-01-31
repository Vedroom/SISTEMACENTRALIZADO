<?php

// Crear conexión
$conexion = new mysqli("localhost", "root", "", "mavepo");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si se recibieron los datos del formulario de subir venta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $idUsuario = $_POST["id_usuario"];
    $idTractor = $_POST["id_tractor"];
    $cantidad = $_POST["cantidad"];
    $fecha = $_POST["fecha"];

    // Consulta SQL para insertar la venta en la tabla de ventas
    $consulta = "INSERT INTO ventas (id_usuario, id_tractor, cantidad, fecha) VALUES (?, ?, ?, ?)";

    // Preparar la consulta
    $sentencia = $conexion->prepare($consulta);

    // Vincular los parámetros
    $sentencia->bind_param("iiis", $idUsuario, $idTractor, $cantidad, $fecha);

    // Ejecutar la consulta
    if ($sentencia->execute()) {
        echo "Venta subida correctamente.";
    } else {
        echo "Error al subir la venta: " . $sentencia->error;
    }

    // Cerrar la sentencia
    $sentencia->close();
} else {
    // Si no se recibieron los datos del formulario, redirigir al usuario a la página de subir venta
    header("Location: menu.php");
    exit();
}

// Cerrar la conexión
$conexion->close();
?>
