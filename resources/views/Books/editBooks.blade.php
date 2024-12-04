<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('Books.editBooks', $books) }}" method="POST">

        @csrf
        <label>
            Titulo:
            <br>
            <input name="name" type="text" value="{{ old('Tiltle', $book->Tiltle) }}">
            <br>
        </label>
        <br>
        <label>
            URL del libro:
            <br>
            <input name="bookURL" type="text" value="{{ old('bookURL', $book->bookURL) }}">
            <br>
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <input name="description" type="text" value="{{ old('description', $book->description) }}">
            <br>
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>

</body>

</html>
