<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/Books/editBooks.css')
</head>


<body>
    <nav class="padding">
        @include('principal.navbar')
    </nav>

    <h1 class="tiltle">Edita el libro</h1>

    <div class="contedorForm">
        <form action="{{ route('Books.updateBook', $book) }}" method="POST" class="form">

            @csrf
            <span class="input-span">
                <label class="label">
                    Titulo:
                    <input name="title" type="text" value="{{ old('title', $book->title) }}">
                    <br>
                </label>
            </span>
            <br>
            <span class="input-span">
                <label class="label">
                    URL del libro:
                    <br>
                    <input name="url" type="text" value="{{ old('url', $book->url) }}">
                    <br>
                </label>
            </span>
            <button type="submit" class="submit">Actualizar</button>
        </form>
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
