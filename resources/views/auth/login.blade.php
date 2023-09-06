<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        @if ($errors->has('email'))
            <span class="error">{{ $errors->first('email') }}</span>
        @endif
        <form method="POST" action="/login">
            @csrf

            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div>
                <button type="submit">Login</button>
            </div>
        </form>
        <p>Não tem uma conta? <a href="/register">Registre-se aqui</a></p>
    </div>
</body>
</html>
