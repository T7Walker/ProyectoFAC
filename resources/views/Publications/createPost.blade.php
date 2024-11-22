<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('Publications.infoPublication') }}" method="POST" enctype="multipart/form-data">
       
        @csrf
        <label>Escribe algo...</label>
        <input type="text" name="description">
        <br>
        <label>Url de la imagen</label>
        <input type="text" name="imageURL">
        <br>
        <button type="submit">Publicar</button>

</body>
</html>