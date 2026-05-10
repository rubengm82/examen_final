let table_cars = document.getElementById('table_cars');

fetch('http://127.0.0.1:8000/api/cars', {
    method: 'GET',
})
.then(response => response.json())
.then(data => {
    console.log(data);

    
    
})
.catch(err => {
    console.log(`ERROR: ${err}`);
})