<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="main">
        <div class="header">
            <div>HEADER</div>
            <div class="header-right">
                <a href="/dash"><button class="logout-btn">Volver</button></a>
            </div>
        </div>

        <div class="form-container">
            <h2>Editar Producto</h2>
            <form id="form-product">
                <input type="number" id="product-id" placeholder="ID del producto" min="1" required>
                <button type="button" id="btn-load">Cargar</button>
                <br><br>
                <input type="text" id="brand" placeholder="Marca" required>
                <input type="text" id="model" placeholder="Modelo" required>
                <br>
                <br>
                <button type="submit">Actualizar</button>
                <a href="/dash"><button type="button">Cancelar</button></a>
            </form>
        </div>

        <div class="footer">FOOTER</div>
    </div>
    @vite('resources/js/app_examen_edit.js')
</body>
</html>