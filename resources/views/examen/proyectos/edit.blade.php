<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
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
            <h2>Editar Proyecto</h2>
            <form id="form-proyecto">
                <input type="number" id="proyecto-id" placeholder="ID del proyecto" min="1" required>
                <button type="button" id="btn-load">Cargar</button>
                <br><br>
                <input type="text" name="nombre" placeholder="Nombre" id="nombre" required><br>
                <input type="text" name="descripcion" placeholder="Descripcion" id="descripcion" required><br>
                <input type="date" name="fecha_inicio" placeholder="Fecha Inicio" id="fecha_inicio" required> Fecha inicio<br> 
                <input type="date" name="fecha_fin" placeholder="Fecha Fin" id="fecha_fin" required> Fecha Fin<br><br> 
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