<?php

// Esto invoca el proceso para la conexion con la BD
include 'ConexionBD.php';

// Lecura de la BD de lobros
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
echo obtenerDatosTabla($conexion, 'libros');

// Esto se usa para cerrar la conexion
$conexion->close();

// ==============================================================================

// Agregar a la BD nuevo Libro
function insertarLibro($conexion, $id_usuario, $detalle, $ruta_imagen, $link_venta, $titulo) {
    
    // Los ? se deben de poner en lugar de los datos 
    $sql = "INSERT INTO libros (ID_usuario, Detalle_Libro, Ruta_Imagen, Link_venta, Titulo) 
            VALUES (?, ?, ?, ?, ?)";

    // stmt es lo que prepara la consulta siguiendo el ejemplo del markdown
    $stmt = $conexion->prepare($sql);
    if (!$stmt) {
        die("Error al preparar la consulta: " . $conexion->error);
    }

    // El issss es para marcar los tipos de datos siguiendo el mismo ejemplo del MD
    $stmt->bind_param("issss", $id_usuario, $detalle, $ruta_imagen, $link_venta, $titulo);

    // Vaalidacion
    if ($stmt->execute()) {
        echo "Nuevo libro registrado con éxito.";
    } else {
        echo "Error al registrar el libro: " . $stmt->error;
    }

    $stmt->close();
}


/* // Ejemplo confirmado, se agregro el nuevo libro en la BD
$id_usuario = 1;
$detalle = "Basados en la antigua sabiduría tolteca, Los cuatro acuerdos nos ofrecen un poderoso 
código de conducta que puede transformar inmediatamente nuestra vida en una nueva experiencia de libertad, dicha absoluta, y amor.";
$ruta_imagen = "https://www.libreriacapitulos.com/cdn/shop/files/los-cuatro-acuerdos-libreria-capitulos-costa-rica.jpg?v=1689000466&width=1445";
$link_venta = "https://www.amazon.com/-/es/Los-cuatro-acuerdos-practica-libertad/dp/187842436X/ref=sr_1_1?crid=GLH1SOSCFREL&dib=eyJ2IjoiMSJ9.beaSFQkFcj2mRPZDbyHyuHK99a4ldUK4ikI1QIiGvJuYa0oVcYxzK39CqPYQL5ZIa71ez4brFmKGsbwcjgTWrBxAHuzBD22sNg8gaLcjaN645LmvxAcRzx4W3RgGYEERfBg1H3X63DrQ391MHPUjj9J7qXbq-p29LuXFWOYODGkw-c3To5zN9Fmo6V1Hf8jFvtYrPGX76SuNNmW3Gao5Z9-UCUvJ7IxxpvHrmqw7WU0.WdykT6MHOnA2hgARdMJ1Wk1uqNgJK-pHT9lW9WTpskI&dib_tag=se&keywords=los+cuatro+acuerdos&qid=1743819117&s=books&sprefix=los+%2Cstripbooks-intl-ship%2C167&sr=1-1";
$titulo = "Los cuatro acuerdos";

// Se debe de usar las variables
insertarLibro($conexion, $id_usuario, $detalle, $ruta_imagen, $link_venta, $titulo);

$conexion->close();
 */

?>
