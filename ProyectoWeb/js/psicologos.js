// Obtener y mostrar psicólogos
fetch('Php_Psicologos.php')
    .then(res => res.json())
    .then(data => {
        const contenedor = document.getElementById('psicologosContainer');
        data.forEach(psico => {
            const div = document.createElement('div');
            div.innerHTML = `<h4>${psico.Nombre_psicologo}</h4><p>${psico.Descripcion_psicologo}</p>`;
            contenedor.appendChild(div);
        });
    });
