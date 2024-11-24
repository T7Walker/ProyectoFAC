<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>descripcion</th>
                <th>URL de la imagen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publications as $provider)
            <tr>
                <td>{{ $publication->description }}</td>
                <td>{{ $publication->imageURL}}</td>
                <td class="actions">
                    <a href="{{route('Publications.viewPublications', $publication->id) }}">Mira el post</a>
                    <a href="{{route('Publications.editPublications', $publication->id) }}">Editalo</a>
                    <form action="{{ route('Publications.delete', $publication->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta publicacion?');">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>