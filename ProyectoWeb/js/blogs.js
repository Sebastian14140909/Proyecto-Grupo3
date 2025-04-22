// Obtener y mostrar blogs
fetch('Php_BienestarEmocional.php')
    .then(res => res.json())
    .then(data => {
        const contenedor = document.getElementById('blogsContainer');
        data.forEach(blog => {
            const div = document.createElement('div');
            div.innerHTML = `<h4>${blog.Titulo}</h4><p>${blog.Descripcion}</p>`;
            contenedor.appendChild(div);
        });
    });
