<?php

include 'ConexionBD.php';

$nombre = $psicologo['Nombre_psicologo'];
$telefono = $psicologo['Telefono'];
$correo = $psicologo['Correo_psicologo'];
$descripcion = $psicologo['Descripcion_psicologo'];
$id_calificacion = $psicologo['ID_Calificacion'];

editarPsicologo($id, $nombre, $especialidad, $experiencia, $telefono, $correo, $foto_url);
echo json_encode(['status' => 'success']);

?>