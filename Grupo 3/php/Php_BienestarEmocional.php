<?php

// Esto invoca el proceso para la conexion con la BD
include 'ConexionBD.php';

// Lectura de blogs y articulos 

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
echo obtenerDatosTabla($conexion, 'blogs_articulos');

// Esto se usa para cerrar la conexion
$conexion->close();


// ==================================================================

// Inserts en Bienestar Emocional
function insertarblogs_articulos($conexion, $titulo, $descripcion, $link, $id_usuario) {

    // Los ? se deben de poner en lugar de los datos 
    $sql = "INSERT INTO blogs_articulos (Titulo, Descripcion, Link, ID_usuario) 
            VALUES (?, ?, ?, ?)";

    // stmt es lo que prepara la consulta siguiendo el ejemplo del markdown
    $stmt = $conexion->prepare($sql);
    if (!$stmt) {
        die("Error al preparar la consulta: " . $conexion->error);
    }

    // El issss es para marcar los tipos de datos siguiendo el mismo ejemplo del MD
    $stmt->bind_param("sssi", $titulo, $descripcion, $link, $id_usuario);

    // Vaalidacion
    if ($stmt->execute()) {
        echo "Nuevo artículo de blog registrado con éxito.";
    } else {
        echo "Error al registrar el artículo del blog: " . $stmt->error;
    }

    // Cerrar el statement
    $stmt->close();
}


/* // Insert validado, se agrego el nuevo articulo
$titulo = "Soluciones y estrategias para mejorar el bienestar emocional";
$descripcion = "Para fortalecer nuestro bienestar emocional, es importante adoptar una serie de hábitos 
saludables que nos ayuden a gestionar nuestras emociones y reducir el impacto de los factores estresantes en nuestra vida";
$link = "https://img.freepik.com/vector-premium/hombre-concepto-dibujos-animados-habitos-saludables_24640-12200.jpg";
$id_usuario = 1;

// Se deben de usar las variables
insertarblogs_articulos($conexion, $titulo, $descripcion, $link, $id_usuario);

$conexion->close(); */

?>
