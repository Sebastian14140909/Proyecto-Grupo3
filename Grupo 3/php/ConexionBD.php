<?php

$conexion = new mysqli("localhost", "ProWebCS", "123", "proyectowebcs");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

?>