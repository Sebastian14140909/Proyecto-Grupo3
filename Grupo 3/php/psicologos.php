
<?php
include 'ConexionBD.php';

function obtenerPsicologos() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM psicologos");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function agregarPsicologo($nombre, $especialidad, $experiencia, $telefono, $correo, $foto_url) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO psicologos (nombre, especialidad, experiencia, telefono, correo, foto_url) 
                           VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nombre, $especialidad, $experiencia, $telefono, $correo, $foto_url]);
}

function editarPsicologo($id, $nombre, $especialidad, $experiencia, $telefono, $correo, $foto_url) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE psicologos SET nombre = ?, especialidad = ?, experiencia = ?, telefono = ?, correo = ?, foto_url = ? WHERE id = ?");
    $stmt->execute([$nombre, $especialidad, $experiencia, $telefono, $correo, $foto_url, $id]);
}

function eliminarPsicologo($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM psicologos WHERE id = ?");
    $stmt->execute([$id]);
}
?>