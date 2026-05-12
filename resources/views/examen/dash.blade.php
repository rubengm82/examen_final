<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="main">
        <div class="header">
            HEADER
            <div class="header-right">
                <span>{{ $user->name ?? '' }} ({{ $user->role ?? '' }})</span>
                <a href="/logout"><button class="logout-btn">Salir</button></a>
            </div>
        </div>
        <div class="sidebar">SIDEBAR</div>
        <div class="cards"></div>
        <div class="footer">FOOTER</div>
    </div>

    <script>
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
    </script>
</body>
</html>
