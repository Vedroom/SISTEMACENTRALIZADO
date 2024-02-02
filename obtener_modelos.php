<?php
// Crear conexión
$conexion = new mysqli("localhost", "root", "", "mavepo");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para obtener los modelos
$sql = "SELECT id_modelo, nombremodelo FROM modelo";
$resultado = $conexion->query($sql);

// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Generar las opciones del select
    while($row = $resultado->fetch_assoc()) {
        echo "<option value='" . $row["id_modelo"] . "'>" . $row["nombremodelo"] . "</option>";
    }
} else {
    echo "<option value=''>No se encontraron modelos</option>";
}

// Cerrar la conexión
$conexion->close();
?>
