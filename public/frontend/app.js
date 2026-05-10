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


let button_x = document.getElementsByClassName('x')[0];
button_x.addEventListener('click', borrar);

function borrar(e) {
    let cantidad_coches;

    fetch('http://127.0.0.1:8000/api/cars')
    .then(res => res.json())
    .then(cars => {
        
        let ultimo_coche = cars[cars.length -1];

        console.log(ultimo_coche);
      
        return fetch(`http://127.0.0.1:8000/api/cars/${ultimo_coche.id}`, {
            method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
            })
            .then(response => response.json())
            .then(data => {
                console.log('COCHE BORRADO!');
            })
            .catch(err => {
                console.log(`ERROR: ${err}`);
            })
    })
    
}