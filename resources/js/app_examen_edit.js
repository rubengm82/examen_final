document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-product');
    const productIdInput = document.getElementById('product-id');
    const brandInput = document.getElementById('brand');
    const modelInput = document.getElementById('model');
    const btnLoad = document.getElementById('btn-load');

    let loadedProductId = null;

    btnLoad.addEventListener('click', () => {
        const productId = productIdInput.value;

        fetch(`/api/products/${productId}`)
            .then(res => res.json())
            .then(product => {
                brandInput.value = product.brand || '';
                modelInput.value = product.model || '';
                loadedProductId = productId;
            })
            .catch(err => console.error('Error cargando producto:', err));
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        // if (!loadedProductId) {
        //     alert('Primero carga un producto válido');
        //     return;
        // }

        const data = {
            brand: brandInput.value,
            model: modelInput.value
        };

        fetch(`/api/products/${loadedProductId}`, {
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