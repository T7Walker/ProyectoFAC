<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite([
        //CSS
        'resources/css/principal/index.css',
    ])

    <title>Pagina principal</title>
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
    @foreach ($publication as $post)
        <div class="cardPost">
            <div class="cardPost-inner">
                <div class="cardPost-front">
                    <img src="{{ $post->url_file }}" alt="imagen_post" class="cardPost__image">
                </div>
                <div class="cardPost-back">
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>
    @endforeach
    <br>
    <h2 class="colorTitulo">¿Quiénes somos?</h2>
    <br>
    <br>

    <div class="cards-container">
        <div class="card">
            <p class="card-p1">
                Somos un grupo de programadores los cuales lanzamos un proyecto el cual te ayudará a integrarte a la
                ciudad Popayán.
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <h2 class="colorTitulo">¿Que puedes encontrar en nuestra pagina?</h2>
    <br>
    <div class="cards-container">
        <div class="card">
            <p class="card-p2">
                En nuestra página tenemos servicios que traen comodidad al integrarte a Popayán, como herramientas
                de
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
