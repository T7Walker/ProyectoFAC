<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir libro</title>
</head>
<body>

    <form action="{{ route('Books.pushBooks') }}" method="POST" enctype="multipart/form-data">
       
        @csrf
        <label>Pon el titulo del libro</label>

        <input type="text" name="tiltle">
        <br>

        <label>Url del libro</label>

        <input type="text" name="bookURL">
        <br>

        <label>Ponle una descripcion</label>

        <input type="text" name="description">
        <br>

        <button type="submit">Publicar</button>
    
</body>
</html>