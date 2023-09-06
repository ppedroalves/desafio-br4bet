<!DOCTYPE html>
<html>
<head>
    <title>Consulta de CEP</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Consulta de CEP</h1>
            </div>
            <div class="user-info">
                @auth
                    <p>Bem-vindo, {{ Auth::user()->name }}</p>
                    <div class="form-group profile-image-container">
                        @if(Auth::user()->image)
                            <img class="profile-image" src="{{ url('storage/' . Auth::user()->image) }}" alt="Foto de Perfil Atual">
                        @else
                            <img class="profile-image" src="{{ asset('img/default-profile.png') }}" alt="Foto de Perfil Padrão">
                        @endif
                    </div>
                    <div class="button-container">
                    <a href="/profile" class="edit-profile-button">Editar Perfil</a>
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="logout-button" type="submit">Logout</button>
                    </form>
                </div>
                @endauth
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="centered-box">
            <h1>Consulta de CEP</h1>
            <form method="POST" action="/consulta-cep">
                @csrf
                <label for="cep">CEP:</label>
                <input type="text" name="cep" id="cep" placeholder="Digite o CEP">
                <button type="submit">Consultar</button>
            </form>

            @if(isset($endereco))
                <h2>Informações do CEP</h2>
                <p>CEP: {{ $endereco['cep'] }}</p>
                <p>Logradouro: {{ $endereco['logradouro'] }}</p>
                <p>Bairro: {{ $endereco['bairro'] }}</p>
                <p>Cidade: {{ $endereco['localidade'] }}</p>
                <p>Estado: {{ $endereco['uf'] }}</p>
                <p>IBGE: {{ $endereco['ibge'] }}</p>
            @endif
        </div>
    </div>

</body>
</html>
