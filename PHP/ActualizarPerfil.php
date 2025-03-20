<?php
// Incluir la conexión a la base de datos
include 'Conexion_be.php';
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    echo '<script>
            alert("Debes iniciar sesión para acceder a esta página.");
            window.location = "../Login.html";
          </script>';
    exit();
}

// Obtener datos del formulario
$nombre = htmlspecialchars($_POST['nombre']);
$correo = htmlspecialchars($_POST['correo']);
$telefono = htmlspecialchars($_POST['telefono']);
$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

// Obtener correo del usuario logueado
$correo_sesion = $_SESSION['usuario'];

// Actualizar datos del usuario
$sql = "UPDATE usuariosss 
        SET nombre_completo='$nombre', 
            correo='$correo', 
            telefono='$telefono', 
            contrasena='$contrasena'
        WHERE correo='$correo_sesion'";

if ($conexion->query($sql) === TRUE) {
    echo '<script>
            alert("Datos actualizados correctamente.");
            window.location = "../Inicio.php";
          </script>';
} else {
    echo '<script>
            alert("Error al actualizar los datos.");
            window.location = "Perfil.php";
          </script>';
}

$conexion->close();
?>
