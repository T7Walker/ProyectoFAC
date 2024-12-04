<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Publicacion</title>
    @vite('resources/css/Publications/createPost.css')
</head>

<body>
    <nav>
        @include('principal.navbar')
    </nav>
    <h1 class="tiltle">Crea un post</h1>
    <br><br>
    <div class="contedorForm">
        <form action="{{ route('Publications.infoPublication') }}" method="POST" enctype="multipart/form-data"
            class="form">

            @csrf
            <span class="input-span">
                <label class="label">Escribe algo...</label>
                <input type="text" name="description">
            </SPan>
            <span class="input-span">
                <label class="label">Url de la imagen (Opcional)</label>
                <input type="text" name="imageURL">
            </span>
            <br>

            <button type="submit" class="submit">Publicar</button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    @include('principal.footer')


</body>

</html>
