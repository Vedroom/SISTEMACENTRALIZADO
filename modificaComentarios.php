<?php
include("db.php");

// Verificar la conexión
if ($con->connect_error) {
  die("La conexión a la base de datos ha fallado: " . $con->connect_error);
}

// Recibir datos del formulario y escaparlos
$nombreSolicitud = $con->real_escape_string($_POST["nombreSolicitud"]);
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

try {
  if ($accion == 'modificaComentario') {
    $contenido = $con->real_escape_string($_POST["observacion"]);
    $con->begin_transaction();

    $query = "UPDATE solicitudes SET comentarios = '$contenido' WHERE nombresolicitud = '$nombreSolicitud';";

    $con->query($query);

    $con->commit();
    echo "<script> 
    alert('Actualización de observación exitosa' );
    setTimeout(function(){ window.location.href = 'verSolicitud.php?nombre=$nombreSolicitud'; }, 0); </script>";
    exit();

  } else if ($accion == 'modificaEstado') {
    $estadoNuevo = $con->real_escape_string($_POST["estadoNuevo"]);
    $con->begin_transaction();

    $query = "UPDATE solicitudes SET estado = '$estadoNuevo' WHERE nombresolicitud = '$nombreSolicitud';";

    $con->query($query);

    $con->commit();
    echo "<script> 
    alert('Actualización de estado exitosa' );
    setTimeout(function(){ window.location.href = 'verSolicitud.php?nombre=$nombreSolicitud'; }, 0); </script>";
    exit();
  } else if ($accion == 'modificaPrioridad') {
    $prioridadNueva = $con->real_escape_string($_POST["prioridadNueva"]);
    $con->begin_transaction();

    $query = "UPDATE solicitudes SET prioridad = '$prioridadNueva' WHERE nombresolicitud = '$nombreSolicitud';";

    $con->query($query);

    $con->commit();
    echo "<script> 
    alert('Actualización de prioridad exitosa' );
    setTimeout(function(){ window.location.href = 'verSolicitud.php?nombre=$nombreSolicitud'; }, 0); </script>";
    exit();
  }
} catch (Exception $e) {
  // Hubo un error en la ejecución de la consulta
  echo "<script> alert('Error al actualizar " . addslashes($e->getMessage()) . "');</script>";
  // ... Puedes manejar el error de alguna manera
}

$con->close();
?>