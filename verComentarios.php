<?php
$conexion = new mysqli('localhost', 'root', '', 'mavepo');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtiene el valor de $nombreSolicitud desde donde sea que lo hayas definido
$query = "SELECT comentarios FROM solicitudes WHERE nombresolicitud = ?";
$stmt = $conexion->prepare($query);

// Verifica si hubo un error al preparar la consulta
if (!$stmt) {
    die("Error de preparación de la consulta: " . $conexion->error);
}

$stmt->bind_param("s", $nombreSolicitud);
$stmt->execute();
$stmt->bind_result($comentarios);

// Muestra el comentario solo si hay datos disponibles
if ($stmt->fetch()) {    
    echo "$comentarios";    
} 

if(($stmt->fetch())===null){
    // Mostrar mensaje si no se encontraron comentarios    
    echo "No se encontraron comentarios para la solicitud seleccionada";
}

$stmt->close();

// Cierra la conexión a la base de datos
$conexion->close();
?>
