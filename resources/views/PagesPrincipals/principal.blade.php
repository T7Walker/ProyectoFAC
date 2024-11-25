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

    <p>user</p>

    <br>

    <div>
        <p>Mapa</p>
    </div>
    <div>
        <p>Libros</p>
    </div>
    <div>
        <p>Publicaciones</p>
    </div>

    <br>

    <h2 class="colorTitulo">¡Últimas publicaciones!</h2>

    <div>

        <p>aqui va todo lo de publications</p>

    </div>

    <br>

    <h2 class="colorTitulo">¿Quienes somos?</h2>

    <!-- Contenedor de Tarjetas -->
    <div class="cards-container">
        <div class="card">
            <p class="card-p1">
                Somos un grupo de programadores los cuales lanzamos un proyecto el cual te ayudara a integrarte a la cuidad Popayán.
            </p>
        </div>
        <div class="card">
            <p class="card-p1">
                ¿Que puedes encontrar en nuestra pagina?
            </p>
            <br>
            <p class="card-p2">En nuestra pagina tenemos servicios los cuales te traen mas comodidad a la hora de integrarte a Popayán, las herramientas como los libros, Publicaciones, mapas en los cuales tienes rutas, zonas regulares. Las cuales te ayudaran a integrarte a Popayán!!</p>
        </div>
    </div>

    <br>
    <br>

    <footer>
        @include('PagesPrincipals.footer')
    </footer>

</body>
</html>
