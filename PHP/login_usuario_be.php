<?php

session_start();

include 'Conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarioss WHERE correo='$correo'
and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: ../Inicio.html");
}else{
    echo '
    <script>
         alert("Usuario no existente, verifique sus datos");
         window.location = "../Login.php";
    </script>
    ';
    exit;
}

?>