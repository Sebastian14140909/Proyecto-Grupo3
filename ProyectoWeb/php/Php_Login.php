<?php
// Conexión a la base de datos
session_start(); // Iniciar sesión
include 'ConexionBD.php';

// Captura de datos enviados desde el formulario
$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

if (empty($correo) || empty($contrasena)) {
    echo json_encode(["login" => false, "error" => "Faltan datos"]);
    exit();
}

// Consulta para validar los datos en la base de datos
$sql = "SELECT * FROM usuarios WHERE Correo='$correo' AND Contraseña='$contrasena' AND Estado='activo'";
$result = $conexion->query($sql);

// Verifica si la consulta fue exitosa y devuelve una respuesta JSON
if ($result && $result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    $_SESSION['usuario'] = $usuario; // Guardar datos en sesión
    echo json_encode(["login" => true]);
} else {
    echo json_encode(["login" => false, "error" => "Credenciales inválidas"]);
}
?>