<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Publicacion</title>
    @vite('resources/css/Publications/viewPublication.css')
</head>

<body>
    <nav class="padding">
        @include('principal.navbar')
    </nav>
    <div class="contendor">
        <h1 class="tiltle">Tu publicacion</h1>
    </div>
    <br><br>
    <span class="centrar">
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <img src="{{ $publication->url_file }}" alt="imagen_post" class="card__image">
                </div>
                <div class="card-back">
                    <p>{{ $publication->content }}</p>
                </div>
            </div>
        </div>
    </span>


    </div>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    @include('principal.footer')
</body>

</html>
