<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Proyecto</title>
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
            <h2>Borrar Proyecto</h2>
            <form id="form-delete">
                <input type="number" id="proyecto-id" placeholder="ID del proyecto" min="1" required>
                <br><br>
                <button type="submit" class="delete-btn">Borrar</button>
                <a href="/dash"><button type="button">Cancelar</button></a>
            </form>
        </div>

        <div class="footer">FOOTER</div>
    </div>
    @vite('resources/js/app_examen_delete.js')
</body>
</html>