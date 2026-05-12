document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-product');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(e.target);
        
        // Crea el data directamente de todo el form
        // const data = Object.fromEntries(formData.entries());
        
        // Crea el data del form campo a campo
        const user_id = document.querySelector('input[name="user_id"]').value;
        const brand = document.querySelector('input[name="brand"]').value;
        const model = document.querySelector('input[name="model"]').value;
        const data = { brand, model, user_id };

        fetch('/api/products', {
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