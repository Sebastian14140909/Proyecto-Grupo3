// Cambiar contraseña
document.getElementById('formPassword').addEventListener('submit', async (e) => {
    e.preventDefault();
    const data = new FormData(e.target);

    const response = await fetch('Php_Password.php', {
        method: 'POST',
        body: data
    });

    const result = await response.json();
    alert(result.success ? 'Contraseña actualizada' : 'Error al actualizar');
});
