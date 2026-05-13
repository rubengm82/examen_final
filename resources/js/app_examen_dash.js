document.addEventListener('DOMContentLoaded', () => {
    fetch('/api/proyectos')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            const container_proyectos_sidebar = document.getElementsByClassName('proyectos-sidebar')[0];
            const container_proyectos_featured = document.getElementsByClassName('proyectos-featured')[0];
            

            data.forEach(proyecto => {
                
                // SIDEBAR
                const proyecto_link = document.createElement('a');
                proyecto_link.innerHTML = `ID: ${proyecto.id} | ${proyecto.nombre}`;
                proyecto_link.href = '#';
                // item.classList.add('item');
                proyecto_link.style.display='block';
                container_proyectos_sidebar.appendChild(proyecto_link);

                container_proyectos_featured.innerHTML = `${proyecto.nombre} ${proyecto.descripcion} `;
            });
        })
        .catch(err => console.log('ERROR: ' + err));
});