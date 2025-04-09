<?php
// Conexión a la base de datos
include 'ConexionBD.php';

// Captura de datos enviados desde el formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$id_rol = 2; // Por defecto usuario
$estado = 'activo';

// Consulta para insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (ID_rol, Nombre, Apellido, Correo, Contraseña, Estado)
        VALUES ('$id_rol', '$nombre', '$apellido', '$correo', '$contrasena', '$estado')";

// Verifica si la consulta fue exitosa y devuelve una respuesta JSON
if ($conexion->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => $conexion->error]);
}
?>