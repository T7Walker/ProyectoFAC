<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <br>
    @include('principal.buttonInicio')
    <br>

    <form action="{{ route('Books.editBooks', $books) }}" method="POST">

        @csrf
        <label>
            Titulo:
            <br>
            <input name="tilte" type="text" value="{{ old('tilte', $book->Title) }}">
            <br>
        </label>
        <br>
        <label>
            URL del libro:
            <br>
            <input name="url" type="text" value="{{ old('url', $book->url) }}">
            <br>
        </label>
        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>

</body>

</html>
