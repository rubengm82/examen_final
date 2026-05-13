document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-proyecto');
    const proyectoIdInput = document.getElementById('proyecto-id');
    const nombreInput = document.getElementById('nombre');
    const descripcionInput = document.getElementById('descripcion');
    const fechaInicioInput = document.getElementById('fecha_inicio');
    const fechaFinInput = document.getElementById('fecha_fin');
    const btnLoad = document.getElementById('btn-load');

    let loadedProyectoId = null;

    btnLoad.addEventListener('click', () => {
        const productId = proyectoIdInput.value;

        fetch(`/api/proyectos/${productId}`)
            .then(res => res.json())
            .then(proyecto => {
                nombreInput.value = proyecto.nombre || '';
                descripcionInput.value = proyecto.descripcion || '';
                fechaInicioInput.value = proyecto.fecha_inicio || '';
                fechaFinInput.value = proyecto.fecha_fin || '';
                loadedProyectoId = productId;
            })
            .catch(err => console.error('Error cargando producto:', err));
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const data = {
            nombre: nombreInput.value,
            descripcion: descripcionInput.value,
            fecha_inicio: fechaInicioInput.value,
            fecha_fin: fechaFinInput.value,
        };
        
        console.log(data);
        

        fetch(`/api/proyectos/${loadedProyectoId}`, {
            method: 'PUT',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        })
            .then(response => {
                if (response.ok) {
                    window.location.href = '/dash';
                } else {
                    console.error('Error al actualizar producto');
                }
            })
            .catch(err => console.error('Error:', err));
    });
});