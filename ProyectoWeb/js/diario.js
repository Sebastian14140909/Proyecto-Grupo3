// Guardar entrada en diario
document.getElementById('formDiario').addEventListener('submit', async (e) => {
    e.preventDefault();
    const data = new FormData(e.target);

    const response = await fetch('Php_Diario.php', {
        method: 'POST',
        body: data
    });

    const result = await response.json();
    alert(result.success ? 'Entrada guardada' : 'Error al guardar');
});
