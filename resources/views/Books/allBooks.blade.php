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
    <div class="tamañoTabla">
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>URL del libro</th>
                    <th>descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $book)
                    <tr>
                        <td>{{ $book->tilte }}
                        </td>
                        <td>{{ $book->bookURL }}</td>
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
</body>

</html>
