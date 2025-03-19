<?php

include 'Conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contrasena'];
//Hashea la contraseña
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

$query = "INSERT INTO usuarioss(nombre_completo, correo, telefono, contrasena) 
         VALUES('$nombre_completo', '$correo', '$telefono', '$contrasena')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarioss WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
        <script>
            alert("Ya estas registrado, intenta con otro diferente");
            window.location = "../Login.html";
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
         <script>
             alert("Tu registro fue exitoso");
             window.location = "../Login.html";
         </script>
    ';
}else{
    echo '
         <script>
             alert("Intentalo de nuevo, tu registro no fue exitoso");
             window.location = "../Login.html";
         </script>
    ';
}
mysqli_close($conexion);
?>