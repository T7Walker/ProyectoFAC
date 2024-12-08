<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar publicaciones</title>
    @vite('resources/css/Publications/editPublication.css')
</head>

<body>
    @include('principal.navbar')

    <h1 class="tiltle">Edita la publicacion</h1>
    <div class="contedorForm">
        <form action="{{ route('Publications.updatePublication', $publication) }}" method="POST" class="form">

            @csrf
            <span class="input-span">
                <label class="label">
                    Descripcion:
                    <input name="content" type="text" value="{{ $publication->content }}" class="form"
                        class="form expandable-description">
                </label>
            </span>
            <span class="input-span">
                <label class="label">
                    URL de la imagen:
                    <input name="url_file" type="text" value="{{ $publication->url_file }}">
                </label class="label">
            </span>
            <span class="input-span">
                <label class="label">
                    fecha:
                    <input name="date" type="date" value="{{ $publication->date }}">
                </label>
            </span>
            <br>
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
