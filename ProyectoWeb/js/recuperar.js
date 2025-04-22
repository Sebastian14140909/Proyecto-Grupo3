document.getElementById('formRecuperar').addEventListener('submit', async (e) => {
  e.preventDefault();

  const pass1 = document.getElementById('nueva_contrasena').value;
  const pass2 = document.getElementById('confirmar_contrasena').value;

  if (pass1 !== pass2) {
    alert('Las contraseñas no coinciden');
    return;
  }

  const data = new FormData(e.target);

  const response = await fetch('php/PHP_RestablecerContrasena.php', {
    method: 'POST',
    body: data
  });

  const result = await response.json();

  if (result.success) {
    alert('Contraseña actualizada con éxito');
    window.location.href = 'login.html';
  } else {
    alert('Error: ' + (result.error || 'No se pudo actualizar'));
  }
});
