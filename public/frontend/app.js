const API_URL = '/api';

document.addEventListener('DOMContentLoaded', () => {
    fetch(`${API_URL}/me`)
    .then(r => r.json())
    .then(data => {
        if (data.error) {
            window.location.href = '/login';
            return;
        }
        
        document.getElementById('user-name').textContent = data.name;
        document.getElementById('user-role').textContent = data.role;
        loadCars();
    })
    .catch(() => {
        window.location.href = '/login';
    });
});

function loadCars() {
    fetch(`${API_URL}/cars`)
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
    });
}
