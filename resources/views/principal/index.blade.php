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
    
    <!-- Lista de libros (clickeables) -->
    <div class="contendor">
        <h2 class="colorTitulo">Libros disponibles</h2>
    </div>
    <div class="books-list-container">
        @if ($books->isEmpty())
            <div class="contendor" style="text-align: center;">
                <p style="color: #c8d0e0; font-size: 1rem;">No hay libros disponibles aún...</p>
            </div>
        @else
            <div class="books-list">
                @foreach ($books as $book)
                    <a href="{{ $book->url }}" target="_blank" class="book-item">
                        <span class="book-icon">📖</span>
                        <span class="book-title">{{ $book->title }}</span>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    <br>
    <br>

     <!-- apartado de informacion de que es FAC -->
 
     <h2 class="colorTitulo">¿Que es FAC?</h2>
     <div class="cards-container">
         <div class="card" style="max-width: 800px; width: 90%;">
             <p class="card-p2">
                 Una nuestra página tenemos servicios que te hacen la vida mas facil a la hora de llegar a popayan, te ayudamos a guiarte con los buses, a encontrat oportunidad de trabajo y de nutrirte con los libros de nuestra comunidad, todo esto con el fin de que tu estadia en popayan sea mas facil y agradable.
             </p>
         </div>
     </div>
    <br><br>
    <footer>
        @include('principal.footer')
    </footer>

</body>

</html>
