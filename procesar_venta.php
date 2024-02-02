<?php

// Verificar si se recibieron los datos del formulario de subir venta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear conexión
    $conexion = new mysqli("localhost", "root", "", "mavepo");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtener los datos del formulario
    $idUsuario = $_POST["id_usuario"];
    $idModelo = $_POST["modelo"];
    $idSerie = $_POST["serie"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $fecha = $_POST["fecha"];
    $total = $cantidad * $precio;

    // Consulta SQL para insertar la venta en la tabla de ventas
    $consulta = "INSERT INTO ventas (id_usuario, id_modelo, id_serie, cantidad, precio, fecha, total) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $sentencia = $conexion->prepare($consulta);

    // Vincular los parámetros
    $sentencia->bind_param("iiidssd", $idUsuario, $idModelo, $idSerie, $cantidad, $precio, $fecha, $total);

    // Ejecutar la consulta
    if ($sentencia->execute()) {
        header("Location: ventas_tractores.php");
        exit();
    } else {
        echo "Error al subir la venta: " . $sentencia->error;
    }

    // Cerrar la sentencia
    $sentencia->close();

    // Cerrar la conexión
    $conexion->close();
} else {
    // Si no se recibieron los datos del formulario, redirigir al usuario a la página de subir venta
    header("Location: menu.php");
    exit();
}

?>
