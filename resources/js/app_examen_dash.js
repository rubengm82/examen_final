document.addEventListener('DOMContentLoaded', () => {
    fetch('/api/cars')
    .then(response => response.json())
    .then(data => {
        console.log(data);
        let container_cards = document.getElementsByClassName('cards')[0];
        data.forEach(car => {
            let card = document.createElement('div');
            card.classList.add('card');
            card.innerHTML = car.brand + ' ' + car.model + '<br>' + (car.remolque ? car.remolque.model : 'N/A');
            container_cards.appendChild(card);
        });
    })
    .catch(err => {
        console.log('ERROR: ' + err);
    });
});