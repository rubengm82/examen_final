document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-product');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const formData = new FormData(e.target);
        const data = Object.fromEntries(formData.entries());

        try {
            const response = await fetch('/api/products', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data)
            });

            if (response.ok) {
                window.location.href = '/dash';
            } else {
                console.error('Error al crear producto');
            }
        } catch (err) {
            console.error('Error:', err);
        }
    });
});