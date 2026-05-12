<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="login-wrapper">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <form action="/login" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Entrar</button>
            </form>
            @if(session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif
        </div>
    </div>
</body>
</html>
