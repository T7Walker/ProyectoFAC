<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/Publications/allPublications.css'])
</head>

<body>
    <nav>
        @include('principal.navbar')
    </nav>

    <br>
    @include('principal.buttonInicio')
    <br>

    <div class="tamañoTabla">
        <table>
            <thead>
                <tr>
                    <th>descripcion</th>
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
                            <form action="{{ route('Publications.deletePublication', $publication->id) }}" method="POST"
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
<BR></BR>
<BR></BR>
<BR></BR>
<BR></BR>
<BR></BR>
<BR></BR>

@include('principal.footer')

</html>
