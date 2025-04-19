<?php
include 'ConexionBD.php';

$sql = "SELECT ID_psicologo, Nombre_psicologo, Telefono, Correo_psicologo, Descripcion_psicologo FROM psicologos";
$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Psicólogos</title>
</head>
<body>
    <h1>Lista de Psicólogos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['ID_psicologo'] . "</td>
                            <td>" . $row['Nombre_psicologo'] . "</td>
                            <td>" . $row['Telefono'] . "</td>
                            <td>" . $row['Correo_psicologo'] . "</td>
                            <td>" . $row['Descripcion_psicologo'] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay psicólogos registrados.</td></tr>";
            }
            ?>
        </tbody>
    </table>


    <form action="eliminar_psicologo.php" method="get">
        <button type="submit">Eliminar Psicólogo</button>
    </form>

    <form action="agregar_psicologo.php" method="get">
        <button type="submit">agregar psicologo</button>
    </form>

</body>
</html>

<?php
$conexion->close();
?>
