// Publicar historia
document.getElementById('formHistoria').addEventListener('submit', async (e) => {
    e.preventDefault();
    const data = new FormData(e.target);

    const response = await fetch('Php_PublicarHistoria.php', {
        method: 'POST',
        body: data
    });

    const result = await response.json();
    alert(result.success ? 'Historia publicada' : 'Error al publicar historia');
});
