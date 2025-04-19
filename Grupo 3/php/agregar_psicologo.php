<?php
include 'ConexionBD.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['agregar_psicologo'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $descripcion = $_POST['descripcion'];

    $nombre = $conexion->real_escape_string($nombre);
    $telefono = $conexion->real_escape_string($telefono);
    $correo = $conexion->real_escape_string($correo);
    $descripcion = $conexion->real_escape_string($descripcion);

    $sql = "INSERT INTO psicologos (Nombre_psicologo, Telefono, Correo_psicologo, Descripcion_psicologo) 
            VALUES (?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conexion->error);
    }

    $stmt->bind_param("ssss", $nombre, $telefono, $correo, $descripcion);

    if ($stmt->execute()) {
        echo "Nuevo psicólogo registrado con éxito.";
    } else {
        echo "Error al agregar el psicólogo: " . $stmt->error;
    }

    $stmt->close();
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Psicólogo</title>
</head>
<body>
    <h1>Agregar un Nuevo Psicólogo</h1>

    <form action="agregar_psicologo.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>

        <button type="submit" name="agregar_psicologo">Agregar Psicólogo</button>
    </form>

    <br>

    <form action="eliminar_psicologo.php" method="get">
        <button type="submit">Eliminar Psicólogo</button>
    </form>

    <form action="obtener_psicologos.php" method="get">
        <button type="submit">Ver psicologos</button>
    </form>

    <br>
    <a href="index.php">Volver a la página principal</a>
</body>
</html>
