<?php
$conexion = new mysqli("localhost", "root", "", "proyectowebcs");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>