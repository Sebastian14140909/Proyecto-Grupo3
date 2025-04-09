// Enviar datos de registro
document.getElementById('formRegistro').addEventListener('submit', async (e) => {
    e.preventDefault();

        // Validar que las contraseñas coincidan
        const password = document.getElementById('inputPassword').value;
        const confirm = document.getElementById('inputPasswordConfirm').value;
    
        if (password !== confirm) {
            alert('Las contraseñas no coinciden');
            return;
        }

    // Capturar los datos del formulario
    const data = new FormData(e.target);

    // Enviar los datos al backend PHP
    const response = await fetch('php/Php_Registro.php', {
        method: 'POST',
        body: data
    });

    // Analizar la respuesta
    const result = await response.json();
    if (result.success) {
        alert('Registro exitoso');
        window.location.href = 'login.html';
    } else {
        alert('Error: ' + (result.error || 'Registro fallido'));
    }
});
