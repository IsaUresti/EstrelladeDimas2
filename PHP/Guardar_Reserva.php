<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); // Inicia la sesión para obtener datos del usuario

// Verifica si los datos del formulario están presentes
if (isset($_POST['fecha']) && isset($_POST['hora']) && isset($_POST['personas']) && isset($_SESSION['id_cliente'])) {
    // Conexión a la base de datos
    include 'Conexion_be.php';

    // Verifica si la conexión fue exitosa
    if (!$conexion) {
        $response = array(
            'success' => false,
            'message' => 'Error de conexión a la base de datos'
        );
        echo json_encode($response); // Devolver respuesta JSON
        exit(); // Detener el script aquí
    }

    // Obtener datos del formulario
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $personas = $_POST['personas'];
    $id_cliente = $_SESSION['id_cliente']; // El ID del cliente lo tomamos de la sesión

    // Insertar la reservación en la base de datos
    $query = "INSERT INTO reservaciones (ID_Cliente, fecha, hora, personas, estado) VALUES ('$id_cliente', '$fecha', '$hora', '$personas', 'pendiente')";
    
    // Ejecutar la consulta y verificar si fue exitosa
    if ($conexion->query($query) === TRUE) {
        // Si la reservación es exitosa, devolvemos un mensaje de éxito
        $response = array(
            'success' => true,
            'estado' => 'pendiente'
        );
    } else {
        // Si hubo un error al insertar
        $response = array(
            'success' => false,
            'message' => 'Error al insertar la reservación: ' . $conexion->error
        );
    }

    // Devolver respuesta en formato JSON
    echo json_encode($response);
} else {
    // Si faltan los datos del formulario
    $response = array(
        'success' => false,
        'message' => 'Datos incompletos'
    );
    echo json_encode($response);
}
?>

