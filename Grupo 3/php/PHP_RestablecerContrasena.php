<?php
include 'ConexionBD.php';

$correo = $_POST['correo'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$nueva = $_POST['nueva_contrasena'] ?? '';

if (empty($correo) || empty($apellido) || empty($nueva)) {
    echo json_encode(["success" => false, "error" => "Faltan datos"]);
    exit();
}

// Validar si el usuario existe con ese correo y apellido
$sql = "SELECT * FROM usuarios WHERE Correo='$correo' AND Apellido='$apellido'";
$result = $conexion->query($sql);

if ($result && $result->num_rows > 0) {
    // Usuario válido, actualizamos la contraseña
    $update = "UPDATE usuarios SET Contraseña='$nueva' WHERE Correo='$correo'";
    $conexion->query($update);
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => "Usuario no encontrado o apellido incorrecto"]);
}
?>
