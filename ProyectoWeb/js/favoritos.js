// Guardar favorito
document.getElementById('formFavoritos').addEventListener('submit', async (e) => {
    e.preventDefault();
    const data = new FormData(e.target);

    const response = await fetch('Php_Favoritos.php', {
        method: 'POST',
        body: data
    });

    const result = await response.json();
    alert(result.success ? 'Guardado en favoritos' : 'Error al guardar');
});
