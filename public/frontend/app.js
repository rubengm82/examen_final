let table_cars = document.getElementById('table_cars');

fetch('http://127.0.0.1:8000/api/cars', {
    method: 'GET',
})
.then(response => response.json())
.then(data => {
    console.log(data);

    let container_cards = document.getElementsByClassName('cards')[0];
    
    data.forEach(car => {
        let card = document.createElement('div');
        card.classList.add('card');
        card.innerHTML = `${car.brand} ${car.model} <br> ${car.remolque.model}`;
        container_cards.appendChild(card);
    });
    
    
})
.catch(err => {
    console.log(`ERROR: ${err}`);
})