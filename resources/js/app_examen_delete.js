document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-delete');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const productId = document.getElementById('product-id').value;

        fetch(`/api/products/${productId}`, {
            method: 'DELETE',
            headers: { 'Content-Type': 'application/json' }
        })
            .then(response => {
                if (response.ok) {
                    window.location.href = '/dash';
                } else {
                    console.error('Error al borrar producto');
                }
            })
            .catch(err => console.error('Error:', err));
    });
});