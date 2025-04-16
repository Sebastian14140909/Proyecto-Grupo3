

document.addEventListener('DOMContentLoaded', () => {
    fetch('php/Php_libroVer.php')
        .then(response => response.json())
        .then(libros => {
            console.log('Prueba')
            console.log(libros)
            const container = document.querySelector('.contenedorLibros');
            container.innerHTML = '';

            libros.forEach(libro => {
                const card = document.createElement('a');
                card.href = libro.Link_venta;
                card.target = '_blank';
                card.classList.add('book-link');

                card.innerHTML = `
                    <div class="book-card">
                        <img src="${libro.Ruta_Imagen}" alt="${libro.Titulo}">
                        <div class="book-title">${libro.Titulo}</div>
                        <div class="book-description">${libro.Detalle_Libro}</div>
                    </div>
                `;

                container.appendChild(card);
            });
        })
        .catch(error => {
            console.error('Libros no cargan:', error);
            const container = document.querySelector('.contenedorLibros');
            container.innerHTML = '<p>Libros no cargan.</p>';
        });
});
