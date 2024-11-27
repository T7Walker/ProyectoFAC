<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/principal.css'])
</head>
<body>

    @include('PagesPrincipals.navBar')

    <h1 class="colorTitulo">Bienvenido</h1>
    <p class="colorTitulo">{{$user->name}}</p>

    <div class="rombo-button-container">
        <div class="rombo-wrapper">
            <div class="rombo-button">
                <a href="{{route('')}}"></a>
                <div class="rombo-content">
                    <img src="https://i.imgur.com/NcDZhd5.png" alt="Mapas">
                    <p>Mapas</p>
                </div>
            </div>
        </div>
        <div class="rombo-wrapper">
            <div class="rombo-button">
                <a href="{{route('Books.allBooks')}}"></a>
                <div class="rombo-content">
                    <img src="https://i.imgur.com/AFLjO3z.png" alt="Libros">
                    <p>Libros</p>
                </div>
            </div>
        </div>
        <div class="rombo-wrapper">
            <div class="rombo-button">
                <a href="{{route('')}}"></a>
                <div class="rombo-content">
                    <img src="https://i.imgur.com/CajBXxF.png" alt="Rutas">
                    <p>Rutas</p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <h2 class="colorTitulo">¡Últimas publicaciones!</h2>
    <div>
        <p>Aquí va todo lo de publicaciones</p>
    </div>
    <br>
    <h2 class="colorTitulo">¿Quiénes somos?</h2>
    <br>

    <!-- Contenedor de Tarjetas -->
    <div class="cards-container">
        <div class="card">
            <p class="card-p1">
                Somos un grupo de programadores los cuales lanzamos un proyecto el cual te ayudará a integrarte a la ciudad Popayán.
            </p>
        </div>
    </div>
    <br>
    <br>
    <h2 class="colorTitulo">¿Que puedes encontrar en nuestra pagina?</h2>
    <br>
    <div class="cards-container">
        <div class="card">
            <p class="card-p2">
                En nuestra página tenemos servicios que traen comodidad al integrarte a Popayán, como herramientas de libros, publicaciones y mapas con rutas y zonas críticas.
            </p>
        </div>
    </div>
    

    <br><br>
    <footer>
        @include('PagesPrincipals.footer')
    </footer>

</body>
</html>
