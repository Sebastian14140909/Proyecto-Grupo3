// Enviar calificación
document.getElementById('formCalificacion').addEventListener('submit', async (e) => {
    e.preventDefault();
    const data = new FormData(e.target);

    const response = await fetch('Php_Calificaciones.php', {
        method: 'POST',
        body: data
    });

    const result = await response.json();
    alert(result.success ? 'Calificación enviada' : 'Error al calificar');
});
