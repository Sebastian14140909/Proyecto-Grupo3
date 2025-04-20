<?php

include 'ConexionBD.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $id = $conexion->real_escape_string($id);

    $sql = "DELETE FROM psicologos WHERE ID_psicologo = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Psicólogo con ID $id eliminado con éxito.";
    } else {
        echo "Error eliminando registro: " . $conexion->error;
    }
} else {
    echo "No se proporcionó un ID válido.";
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Psicólogo</title>
</head>
<body>
    <h1>Eliminar Psicólogo</h1>

    <form action="eliminar_psicologo.php" method="GET">
        <label for="id">ID del Psicólogo:</label>
        <input type="number" id="id" name="id" required><br><br>

        <button type="submit">Eliminar Psicólogo</button>
    </form>

</body>
</html>