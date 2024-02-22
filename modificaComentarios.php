<?php
include("db.php");

// Verificar la conexión
if ($con->connect_error) {
  die("La conexión a la base de datos ha fallado: " . $con->connect_error);
}

date_default_timezone_set('America/Mexico_City');
$fechaHoy = date("d/m/Y"); // Formato: Año-Mes-Día
$fechaHoraActual = date('d/m/Y H:i');


//Consultando la id del primer logsolicitud para empezar la consulta desde ahí
$consulta_primer_logsolicitud = "SELECT * FROM `logsolicitudes`";
$resultado_busca_logs = mysqli_query($con, $consulta_primer_logsolicitud);
$numero_logs = mysqli_num_rows($resultado_busca_logs);
$resultado_primer_logsolicitud = mysqli_query($con, $consulta_primer_logsolicitud);
$registro_primer_logsolicitud = mysqli_fetch_array($resultado_primer_logsolicitud, MYSQLI_ASSOC);
$primer_id_logsolicitud = $registro_primer_logsolicitud['id'];

//Obteniendo la ultima id solicitudes para parar
$numero_de_logs = mysqli_num_rows($resultado_busca_logs);
$ultima_id_log = $primer_id_logsolicitud + ($numero_logs - 1);
$siguienteIdLog = 1 + $ultima_id_log;

// Recibir datos del formulario y escaparlos
$nombreSolicitud = $con->real_escape_string($_POST["nombreSolicitud"]);
$usuario = $con->real_escape_string($_POST["usuario"]);
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

try {
  //Se ejecuta una actualización dependiendo de la acción que sea
  if ($accion == 'modificaComentario') {
    $contenido = $con->real_escape_string($_POST["observacion"]);
    $con->begin_transaction();

    //Actualización de comentarios
    $query = "UPDATE solicitudes SET comentarios = '$contenido' WHERE nombresolicitud = '$nombreSolicitud';";
    $con->query($query);
    $con->commit();

    // Registro en la tabla de logs
    $sql2 = "INSERT INTO logsolicitudes (id, fecha, usuario, accion, tipo, solicitud) 
             VALUES ('$siguienteIdLog' ,'$fechaHoraActual', '$usuario', 'Observación', 'comentario', '$nombreSolicitud')";
    $con->query($sql2);

    echo "<script> 
    alert('Actualización de observación exitosa' );
    setTimeout(function(){ window.location.href = 'verSolicitud.php?nombre=$nombreSolicitud'; }, 0); </script>";
    exit();

  } else if ($accion == 'modificaEstado') {
    $estadoNuevo = $con->real_escape_string($_POST["estadoNuevo"]);
    $con->begin_transaction();

    //Actualización de estado
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

    //Actualización de prioridad
    $query = "UPDATE solicitudes SET prioridad = '$prioridadNueva' WHERE nombresolicitud = '$nombreSolicitud';";

    $con->query($query);

    $con->commit();
    echo "<script> 
    alert('Actualización de prioridad exitosa' );
    setTimeout(function(){ window.location.href = 'verSolicitud.php?nombre=$nombreSolicitud'; }, 0); </script>";
    exit();
  }
} catch (Exception $e) {
  // Avisa que hubo un error en la ejecución de la consulta
  echo "<script> alert('Error al actualizar " . addslashes($e->getMessage()) . "');</script>";
  }

$con->close();
?>
