<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    @vite ('resources/css/Books/allBooks.css')

</head>

<body>
    <nav>
        @include ('principal.navBar')
    </nav>

    @include('principal.buttonInicio')

    <div class="tamañoTabla">
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>URL del libro</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}
                        </td>
                        <td>{{ $book->url }}</td>
                        <td class="actions">
                            <a href="{{ route('Books.viewBooks', $book->id) }}">Mira el libro</a>

                            <a href="{{ route('Books.editBooks', $book->id) }}">Editalo</a>

                            <form action="{{ route('Books.deleteBook', $book->id) }}" method="POST"
                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar el libro?');">
                                @csrf
                                @method('delete')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
