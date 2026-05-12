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
            <div>HEADER</div>
            <div class="header-right">
                <span>{{ $user->name ?? '' }} ({{ $user->role ?? '' }})</span>
                <a href="/logout"><button class="logout-btn">Salir</button></a>
            </div>
        </div>
        <div class="sidebar">SIDEBAR</div>
        
        <div class="cards"></div>

        {{-- Asi solo lo veria role admin, mira de poner el js dentro del if --}}
        {{-- @if($user->role === 'admin')
            @vite('resources/js/app_examen_dash.js')
        @endif --}}

        <div class="footer">FOOTER</div>
    </div>
{{-- Comentalo si ves que las cards van por role vigilando lo de arriba --}}
@vite('resources/js/app_examen_dash.js')
</body>
</html>
