<?php

// Esto invoca el proceso para la conexion con la BD
include 'ConexionBD.php';


// Leer taba Historias

function obtenerDatosTabla($conexion, $tabla) {
    $query = "SELECT * FROM $tabla";
    $resultado = $conexion->query($query);

    $datos = array();

    while ($fila = $resultado->fetch_assoc()) {
        $datos[] = $fila;
    }

    return json_encode($datos);
}

// La variable conexion debe de venir del php conexion
echo obtenerDatosTabla($conexion, 'historias');

// Esto se usa para cerrar la conexion
$conexion->close();


// ===========================================================

// insert nuevas historias
function insertarHistoria($conexion, $id_usuario, $trabajo, $historia) {

    // Los ? se deben de poner en lugar de los datos 
    $sql = "INSERT INTO historias (ID_Usuario, Trabajo, Historias) 
            VALUES (?, ?, ?)";

    // stmt es lo que prepara la consulta siguiendo el ejemplo del markdown
    $stmt = $conexion->prepare($sql);
    if (!$stmt) {
        die("Error al preparar la consulta: " . $conexion->error);
    }

    // El issss es para marcar los tipos de datos siguiendo el mismo ejemplo del MD
    $stmt->bind_param("iss", $id_usuario, $trabajo, $historia);

    // Vaalidacion
    if ($stmt->execute()) {
        echo "Historia registrada con éxito.";
    } else {
        echo "Error al registrar la historia: " . $stmt->error;
    }

    $stmt->close();
}

/* // Ejemplo confirmado, se agrego la nueva historia
$id_usuario = 2;
$trabajo = "Atencion al cliente";
$historia = "Mateo López creció entre el aroma a pan recién horneado. cuando su padre enfermó, con solo 16 años, tomó las riendas de la 
panadería familiar para mantener a su madre y a sus hermanos menores. Las ventas eran escasas, pero mateo no se rindió. aprendió nuevas 
recetas en videos y empezó a hacer pasteles personalizados. a veces, los regalaba a familias que no podían pagar. Un día, una mujer le agradeció
entre lágrimas: su pastel había sido lo único que hizo sonreír a su hijo, que luchaba contra el cáncer. ese momento marcó a mateo, quien siguió adelante. 
Su panadería se convirtió en un símbolo de esperanza, recordándole que cada pequeño gesto podía cambiar una vida.";

insertarHistoria($conexion, $id_usuario, $trabajo, $historia);

$conexion->close(); */



?>
