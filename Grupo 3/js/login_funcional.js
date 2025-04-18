
// Iniciar sesión
document.getElementById('formLogin').addEventListener('submit', async (e) => {
    e.preventDefault();

    const data = new FormData(e.target);

    const response = await fetch('php/Php_Login.php', {
        method: 'POST',
        body: data
    });

    const result = await response.json();
    console.log(result); // Mostrar respuesta del servidor

    if (result.login) {
        alert('Inicio de sesión exitoso');
        window.location.href = '/ProyectoWeb/index.php';
    } else {
        alert(result.error || 'Correo o contraseña incorrectos');
    }
});
