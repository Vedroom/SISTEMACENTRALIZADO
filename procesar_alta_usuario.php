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
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$sucursal = $_POST['sucursal'];
$id_rol = $_POST['id_rol'];

// Insertar datos en la tabla "usuario"
$sql = "INSERT INTO usuarios (usuario, contrasena, nombre, sucursal, id_rol) VALUES ('$usuario', '$contrasena','$nombre', '$sucursal', '$id_rol')";

if ($conn->query($sql) === TRUE) {
    $message = "Usuario creado";
    echo "<script type='text/javascript'>
        alert('$message');
    </script>";
    header("Location: usuarios.php");
    exit();
} else {
    // Redirigir al usuario a una página de error
    $message = "Usuario no creado";
    echo "<script type='text/javascript'>
        alert('$message');
    </script>";
    header("Location: usuarios.php");
    exit();
}
?>