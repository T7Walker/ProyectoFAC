<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Publicacion</title>
    @vite('resources/css/Publications/viewPublication.css')
</head>

<body>
    @include('principal.navbar')

    <h1 class="tiltle">Tu publicacion</h1>
    <br><br>
    <span class="cardPublication">
        <div class="card">
            <img src="{{ $publication->url_file }}" alt="imagen_post" class="card__image">
            <div class="card__content">
                <p class="card__title">Tu publicacion
                </p>
                <p class="card__description">{{ $publication->content }}</p>
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
