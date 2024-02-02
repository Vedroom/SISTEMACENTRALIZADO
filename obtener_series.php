<?php
// Establecer la conexión con la base de datos
$conexion = new mysqli("localhost", "root", "", "mavepo");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si se recibió el ID del modelo
if (isset($_POST["modelo"])) {
    $idModelo = $_POST["modelo"];

    // Consulta SQL para obtener las series asociadas al modelo seleccionado
    $consulta = "SELECT id_serie, nombre FROM serie WHERE id_modelo = ?";

    // Preparar la consulta
    $sentencia = $conexion->prepare($consulta);

    // Vincular el parámetro
    $sentencia->bind_param("i", $idModelo);

    // Ejecutar la consulta
    $sentencia->execute();

    // Obtener el resultado de la consulta
    $resultado = $sentencia->get_result();

    // Verificar si se encontraron series asociadas al modelo
    if ($resultado->num_rows > 0) {
        // Construir las opciones de serie como un conjunto de elementos <option>
        $options = "";
        while ($fila = $resultado->fetch_assoc()) {
            $options .= "<option value='" . $fila["id_serie"] . "'>" . $fila["nombre"] . "</option>";
        }
        // Devolver las opciones de serie como respuesta
        echo $options;
    } else {
        // Si no se encontraron series asociadas al modelo, devolver un mensaje de error
        echo "<option value=''>No se encontraron series para este modelo</option>";
    }

    // Liberar los recursos y cerrar la conexión
    $sentencia->close();
} else {
    // Si no se recibió el ID del modelo, devolver un mensaje de error
    echo "<option value=''>Error: No se proporcionó el ID del modelo</option>";
}

// Cerrar la conexión
$conexion->close();
?>
