﻿<?php
session_start();
session_unset();  // Eliminar todas las variables de sesión
session_destroy();  // Destruir la sesión
header("Location: ../Inicio.php");  // Redirigir al inicio
exit();
?>
