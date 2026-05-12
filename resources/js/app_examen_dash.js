document.addEventListener('DOMContentLoaded', () => {
    fetch('/api/products')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            const container = document.getElementsByClassName('content')[0];
            data.forEach(product => {
                const item = document.createElement('div');
                item.classList.add('item');
                item.innerHTML = `ID: ${product.id}<br>${product.brand} ${product.model}`;
                container.appendChild(item);
            });
        })
        .catch(err => console.log('ERROR: ' + err));
});