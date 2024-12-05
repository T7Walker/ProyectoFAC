<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Libro</title>
    @vite('resources/css/Books/viewBooks.css')
</head>

<body>
    @include('principal.navbar')

    <h1 class="colorTitulo">Este es libro que publicaste</h1>
    <br>
    @include('principal.buttonInicio')
    <br>
    <div class="button" data-text="Awesome">
        <span class="actual-text">&nbsp;{{ $book->title }}&nbsp;</span>
        <span aria-hidden="true" class="hover-text">&nbsp;{{ $book->title }}&nbsp;</span>
    </div>
    <br>
    <br>
    <br>
    <button class="shadow__btn">Link del libro</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    @include('principal.footer')
</body>

</html>
