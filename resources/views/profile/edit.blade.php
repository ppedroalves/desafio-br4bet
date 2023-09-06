<!DOCTYPE html>
<html>
<head>
    <title>Editar Perfil</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <div class="edit-profile-container">
        <h1>Editar Perfil</h1>
        <form method="POST" action="/edit-profile" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group profile-image-container">
                @if(Auth::user()->image)
                <img class="profile-image" src="{{ url('storage/' . Auth::user()->image) }}" alt="Foto de Perfil Atual">
                @else
                <img class="profile-image" src="{{ asset('img/default-profile.png') }}" alt="Foto de Perfil Padrão">
                @endif
                <input type="file" name="profile_photo" id="profile_photo" value="{{ old('image', auth()->user()->image) }}">
            </div>
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}">
            </div>
            <div class="buttons">
                <button type="submit">Atualizar Perfil</button>
                <a href="/" class="back-button">Voltar</a>
            </div>
            
        </form>
    </div>
</body>
</html>
