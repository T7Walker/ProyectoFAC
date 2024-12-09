<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/principal/index.css'])

    <title>Página principal</title>
</head>

<body>

    @include('principal.navbar')

    <div class="contendor">
        <h1 class="colorTitulo">Bienvenido</h1>
        <p class="colorNombre">{{ $userData->name }}</p>
    </div>

    <div class="profile-container">
        <img src="{{ $userData->urlimg }}" alt="fotoDePerfil" class="profile-picture">
    </div>

    <div class="contendor">
        <h2 class="colorTitulo">¡Últimas publicaciones!</h2>
    </div>
    <div class="cards-container">
        @if ($publications->isEmpty())
            <div class="cardPost-container">
                <div class="cardPost">
                    <div class="cardPost-inner">
                        <div class="cardPost-front">
                            <img src="https://placehold.co/600x400" alt="imagen_post" class="cardPost__image">
                        </div>
                        <div class="cardPost-back">
                            <p>No hay publicaciones aún...</p>
                        </div>
                    </div>
                </div>
            </div>
        @else
            @foreach ($publications as $publication)
                <div class="cardPost-container">
                    <div class="cardPost">
                        <div class="cardPost-inner">
                            <div class="cardPost-front">
                                <img src="{{ $publication->url_file }}" alt="imagen_post" class="cardPost__image">
                            </div>
                            <div class="cardPost-back">
                                <p>{{ $publication->content }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <br>
    <br>
    <br>
    <br>
    <h2 class="colorTitulo">¿Quiénes somos?</h2>
    <br><br>

    <div class="cards-container">
        <div class="card">
            <p class="card-p1">
                Somos un grupo de programadores los cuales lanzamos un proyecto el cual te ayudará a integrarte a la
                ciudad de Popayán.
            </p>
        </div>
    </div>

    <br><br><br><br>

    <h2 class="colorTitulo">¿Qué puedes encontrar en nuestra página?</h2>
    <br>
    <div class="cards-container">
        <div class="card">
            <p class="card-p2">
                En nuestra página tenemos servicios que traen comodidad al integrarte a Popayán, como herramientas de
                libros, publicaciones y mapas con rutas y zonas críticas.
            </p>
        </div>
    </div>

    <br><br>
    <footer>
        @include('principal.footer')
    </footer>

</body>

</html>
