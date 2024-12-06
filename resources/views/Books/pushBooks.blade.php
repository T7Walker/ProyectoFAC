<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir libro</title>
    @vite(['resources/css/Books/pushBooks.css'])
</head>

<body>
    @include('principal.navbar')

    <div class="contedorForm">

        <form action="{{ route('Books.infoBook') }}" method="POST" enctype="multipart/form-data" class="form">

            @csrf
            <span class="input-span">
                <label class="label">Pon el titulo del libro</label>
                <input type="text" name="title">
            </span>
            <br>
            <span class="input-span">
                <label class="label">Url del libro</label>
                <input type="text" name="url">
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
    <footer>
        @include('principal.footer')
    </footer>

</body>

</html>
