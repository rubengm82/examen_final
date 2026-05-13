<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <h1>GESTOR DELS MEUS PROJECTES</h1>
    </header>

    <main class="layout">

        <aside class="sidebar">
            <h2>Llistat del meus projectes</h2>
            <p>Projecte 1</p>
            <p>Projecte 2</p>
            <p>Projecte 3</p>
            <p>Projecte 4</p>
        </aside>

        <article class="featured">
            Projecte 1: És el projecte més nou 
        </article>

        <section class="news">
            <article class="card">Tasca 1 del projecte seleccionat </article>
            <article class="card">Tasca 2 del projecte seleccionat</article>
            <article class="card">Tasca 3 del projecte seleccionat</article>
            <article class="card">Tasca 4 del projecte seleccionat</article>
            <article class="card">Tasca 5 del projecte seleccionat</article>
            <article class="card">Tasca 6 del projecte seleccionat </article>
        </section>

    </main>

    <footer>
        <p>Examen DAW - Layout Responsive sense media queries</p>
    </footer>

@vite('resources/js/app_examen_dash.js')
</body>
</html>
