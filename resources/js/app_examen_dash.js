document.addEventListener('DOMContentLoaded', () => {
    fetch('/api/products')
    .then(response => response.json())
    .then(data => {
        console.log(data);
        let container_content = document.getElementsByClassName('content')[0];
        data.forEach(product => {
            let item = document.createElement('div');
            item.classList.add('item');
            item.innerHTML = product.brand + ' ' + product.model;
            container_content.appendChild(item);
        });
    })
    .catch(err => {
        console.log('ERROR: ' + err);
    });
});