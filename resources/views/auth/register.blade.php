<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
    <title>Registrar</title>
</head>
<body>
    <div class="register-container">
        <h1>Registrar</h1>

        <form method="POST" action="/register">
            @csrf

            <div>
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required>
            </div>
            
            <div>
                <button type="submit">Registrar</button>
            </div>
        </form>
        <p>Já tem uma conta? <a href="/login">Faça login</a></p>
    </div>
</body>
</html>
