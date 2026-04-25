let table_cars = document.getElementById('table_cars');

fetch('http://127.0.0.1:8000/api/cars', {
    method: 'GET',
})
.then(response => response.json())
.then(data => {
    console.log(data);
    // console.log(data[0].user.name);
    // div_fetch.innerHTML = data[0].user.name;

    table_cars.innerHTML += 
    `
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Propietario</th>
    </tr>
    `

    data.forEach(coche => {
        table_cars.innerHTML += 
        `
        <tr>
            <td></td>
        </tr>
            
        `;
    });

    // (data.ok) ? mensajes_p.style.color = 'green' : mensajes_p.style.color = 'red';
    //mensajes_p.style.color = data.ok ? 'green' : 'red';
    // mensajes_p.innerHTML = data.evaluation[0];
    //mensajes_p.innerHTML = '';
    //data.evaluation.forEach(element => {
        //mensajes_p.innerHTML += `·${element}<br>`
    //});
})
.catch(err => {
    console.log(`ERROR: ${err}`);
})

// console.log('TEST!');
