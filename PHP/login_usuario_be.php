<?php

session_start();

include 'Conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuariosss WHERE correo='$correo'");
$datos_usuario = mysqli_fetch_assoc($validar_login);

if ($datos_usuario && password_verify($contrasena, $datos_usuario['contrasena'])) {
    $_SESSION['usuario'] = $correo;
    header("location: ../Inicio.php");
} else {
    echo '
    <script>
         alert("Usuario no existente, verifique sus datos");
         window.location = "../Login.html";
    </script>
    ';
    exit;
}


?>