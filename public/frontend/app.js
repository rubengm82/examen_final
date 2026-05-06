let table_cars = document.getElementById('table_cars');

fetch('http://127.0.0.1:8000/api/cars', {
    method: 'GET',
})
.then(response => response.json())
.then(data => {
    console.log(data);
    // console.log(data[0].user.name);
    // div_fetch.innerHTML = data[0].user.name;



    // ///// CARDS GRID /////
    let cards = document.getElementById('cards')
    cards.classList.add('grid');
    
    data.forEach((coche, index) => {
        let card = document.createElement('div');
        
        card.classList.add('card');
        card.classList.add('card_color_' + index);
        card.innerHTML = `
            <p>COCHE: ${coche.brand} ${coche.model} ${coche.year}</p>
            <p>USUARIO: ${coche.user.name} ${coche.user.last_name} <i>(${coche.user.email})</i></p>
        `;
        cards.appendChild(card);
    });



     // ///// TABLE /////
    /* table_cars.innerHTML += `
    <tr>
        <th style='padding: 4px'>Marca</th>
        <th style='padding: 4px'>Modelo</th>
        <th style='padding: 4px'>Propietario</th>
    </tr>
    `;

    data.forEach(coche => {
        table_cars.innerHTML += `
        <tr>
            <td style='padding: 4px'>${coche.brand}</td>
            <td style='padding: 4px'>${coche.model}</td>
            <td style='padding: 4px'>${coche.user.name} ${coche.user.last_name}</td>
        </tr>
        `;
    }); */


    // ///// EXTRA INFO /////
   /*  (data.ok) ? mensajes_p.style.color = 'green' : mensajes_p.style.color = 'red';
    mensajes_p.style.color = data.ok ? 'green' : 'red';
    mensajes_p.innerHTML = data.evaluation[0];
    mensajes_p.innerHTML = '';
    data.evaluation.forEach(element => {
        mensajes_p.innerHTML += `·${element}<br>`
    }); */
})
.catch(err => {
    console.log(`ERROR: ${err}`);
})

// console.log('TEST!');
