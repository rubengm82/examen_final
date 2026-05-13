document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-product');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(e.target);
        
        // Crea el data directamente de todo el form
        // const data = Object.fromEntries(formData.entries());
        
        // Crea el data del form campo a campo
        const user_id = document.querySelector('input[name="user_id"]').value;
        const nombre = document.querySelector('input[name="nombre"]').value;
        const descripcion = document.querySelector('input[name="descripcion"]').value;
        const fecha_inicio = document.querySelector('input[name="fecha_inicio"]').value;
        const fecha_fin = document.querySelector('input[name="fecha_fin"]').value;
        const data = { user_id, nombre, descripcion, fecha_inicio, fecha_fin};

        fetch('/api/proyectos', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data)
        })
            .then(response => {
                if (response.ok) {
                    window.location.href = '/dash';
                } else {
                    console.error('Error al crear producto');
                }
            })
            .catch(err => console.error('Error:', err));
    });
});