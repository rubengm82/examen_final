const API_URL = '/api';

document.addEventListener('DOMContentLoaded', () => {
    const user = JSON.parse(localStorage.getItem('user'));
    
    if (!user) {
        window.location.href = '/login';
        return;
    }
    
    document.getElementById('user-name').textContent = user.name;
    document.getElementById('user-role').textContent = user.role;
    document.getElementById('user-info').style.display = 'inline';
    document.getElementById('logout-btn').style.display = 'inline';
    
    loadCars();
});

function loadCars() {
    fetch(`${API_URL}/cars`, {
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
    });
}

function logout() {
    localStorage.removeItem('user');
    window.location.href = '/login';
}
