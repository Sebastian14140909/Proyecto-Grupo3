<?php
session_start();
session_unset();       // Limpia todas las variables de sesión
session_destroy();     // Destruye la sesión actual

// Redirige de vuelta al login
header("Location: /ProyectoWeb/login.html");
exit();
?>
