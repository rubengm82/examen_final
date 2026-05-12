<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('frontend/styles.css') }}">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <input type="email" id="email" placeholder="Email" required>
            <input type="password" id="password" placeholder="Password" required>
            <button onclick="login()">Entrar</button>
            <p id="error" style="color: red; display: none;"></p>
        </div>
    </div>

    <script>
        const API_URL = '/api';

        function login() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorEl = document.getElementById('error');
            errorEl.style.display = 'none';

            fetch(`${API_URL}/login`, {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({ email, password })
            })
            .then(r => r.json())
            .then(data => {
                if (data.error) {
                    errorEl.textContent = data.error;
                    errorEl.style.display = 'block';
                } else {
                    localStorage.setItem('user', JSON.stringify(data));
                    window.location.href = '/dash?user_id=' + data.id;
                }
            })
            .catch(err => {
                errorEl.textContent = 'Error de conexión';
                errorEl.style.display = 'block';
            });
        }
    </script>
</body>
</html>
