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
        <div class="header-right">
            <span>{{ $user->name ?? '' }} ({{ $user->role ?? '' }})</span>
            <a href="/logout"><button class="logout-btn">Salir</button></a>
        </div>
    </header>

    <main class="layout">

        <aside class="sidebar">
            <h2>Llistat del meus projectes</h2>
            {{-- <p>Projecte 1</p>
            <p>Projecte 2</p>
            <p>Projecte 3</p>
            <p>Projecte 4</p> --}}
            <div class="proyectos-sidebar"></div>
            <a href="/proyectos/create"><button>Crear nuevo producto</button></a>
            <a href="/proyectos/edit/1"><button>Editar producto</button></a>
            <a href="/proyectos/delete"><button>Borrar producto</button></a>

        </aside>

        <article class="featured">
            {{-- Projecte 1: És el projecte més nou  --}}
            <div class="proyectos-featured"></div>
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
