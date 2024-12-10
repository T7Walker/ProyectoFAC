<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones</title>
    @vite(
        'resources/css/Publications/allPublications.css',
    
        'resources/js/button/createPost.js'
    )

    <script>
        const createPostPage = "{{ route('Publications.createPost') }}";
    </script>

</head>

<body>
    <header class="padding">
        @include('principal.navbar')
    </header>
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
                    <th>Descripcion</th>
                    <th>URL de la imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publication as $publication)
                    <tr>
                        <td>{{ $publication->content }}</td>
                        <td>{{ $publication->url_file }}</td>
                        <td class="actions">
                            <a href="{{ route('Publications.viewPublication', $publication->id) }}">Mira el post</a>
                            <a href="{{ route('Publications.editPublication', $publication->id) }}">Editalo</a>
                            <form action="{{ route('Publications.deletePublication', $publication->id) }}"
                                method="POST"
                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta publicacion?');">
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
<br>
<br>
<br>
<br>
<br>
<br>

@include('principal.footer')

</html>
