<?php
// Incluir la conexión y verificar la sesión
include 'Conexion_be.php';
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '<script>
            alert("Debes iniciar sesión para acceder a esta página.");
            window.location = "../Login.html";
          </script>';
    exit();
}

// Obtener correo del usuario logueado
$correo_sesion = $_SESSION['usuario'];

// Obtener datos actuales del usuario
$result = $conexion->query("SELECT * FROM usuariosss WHERE correo='$correo_sesion'");

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc(); // Define correctamente $usuario
} else {
    echo '<script>
            alert("No se encontraron datos para el usuario.");
            window.location = "../Login.html";
          </script>';
    exit();
}

$conexion->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Actualizar datos</title>
    <link rel="stylesheet" href="../CSS/EstiloPerfil.css">
</head>
<body>
  <div class="container">
    <h2>Actualizar Información del Usuario</h2>
    <form method="POST" action="ActualizarPerfil.php">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="<?php echo htmlspecialchars($usuario['nombre_completo'] ?? ''); ?>" required><br>

        <label>Correo:</label><br>
        <input type="email" name="correo" value="<?php echo htmlspecialchars($usuario['correo'] ?? ''); ?>" required><br>

        <label>Teléfono:</label><br>
        <input type="tel" name="telefono" value="<?php echo htmlspecialchars($usuario['telefono'] ?? ''); ?>" required><br>

        <label>Contraseña (nueva):</label><br>
        <input type="password" name="contrasena" required><br>

        <br>
        <input type="submit" value="Actualizar">
    </form>
  </div>
</body>
</html>
