<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
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
            <h2>Crear Nuevo Producto</h2>
            <form id="form-product">
                <input type="text" name="nombre" placeholder="Nombre" required><br>
                <input type="text" name="descripcion" placeholder="Descripcion" required><br>
                <input type="date" name="fecha_inicio" placeholder="Fecha Inicio" required> Fecha inicio<br> 
                <input type="date" name="fecha_fin" placeholder="Fecha Fin" required> Fecha Fin<br><br> 
                <input type="number" name="user_id" placeholder="User ID" min="1" required><br><br><br>
                <br>
                <button type="submit">Crear</button>
                <a href="/dash"><button type="button">Cancelar</button></a>
            </form>
        </div>

        <div class="footer">FOOTER</div>
    </div>
    @vite('resources/js/app_examen_create.js')
</body>
</html>