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

    <div class="ubication">
        <button class="cssbuttons-io-button" id="create"
            onclick="window.location='{{ route('Publications.createPost') }}'">
            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
            </svg>
            <span>Crear</span>
        </button>
    </div>

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
