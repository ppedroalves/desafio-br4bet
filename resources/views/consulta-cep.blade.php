<!DOCTYPE html>
<html>
<head>
    <title>Consulta de CEP</title>
</head>
<body>
    <h1>Consulta de CEP</h1>

    <!-- Verifica se $endereco está definido antes de acessar seus valores -->
    @if(isset($endereco))
        <h2>Informações do CEP</h2>
        <p>CEP: {{ $endereco['cep'] }}</p>
        <p>Logradouro: {{ $endereco['logradouro'] }}</p>
        <p>Bairro: {{ $endereco['bairro'] }}</p>
        <p>Cidade: {{ $endereco['localidade'] }}</p>
        <p>Estado: {{ $endereco['uf'] }}</p>
        <p>IBGE: {{ $endereco['ibge'] }}</p>
    @endif

    <form method="POST" action="/consulta-cep">
        @csrf
        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" placeholder="Digite o CEP">
        <button type="submit">Consultar</button>
    </form>
</body>
</html>
