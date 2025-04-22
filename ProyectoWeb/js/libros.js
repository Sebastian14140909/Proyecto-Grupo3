// Obtener y mostrar libros
fetch('Php_Libros.php')
    .then(res => res.json())
    .then(data => {
        const contenedor = document.getElementById('librosContainer');
        data.forEach(libro => {
            const div = document.createElement('div');
            div.innerHTML = `<h4>${libro.Titulo}</h4><a href="${libro.Link_venta}" target="_blank">Comprar</a>`;
            contenedor.appendChild(div);
        });
    });
