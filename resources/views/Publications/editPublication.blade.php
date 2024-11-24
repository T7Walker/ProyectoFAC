<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Publicaciones</title>
</head>
<body>
    <form action="{{route('Publications.updatePublication', $publications)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            Descripcion:
            <br>
            <input name="description" type="text" value="{{old('description',$publication->description) }}">
            <br>
        </label>
        <br>
        <label>
            URL de la imagen:
            <br>
            <input name="imageURL" type="text" value="{{old('imageURL',$publication->bookURL)}}">
            <br>
        </label>
        <br>
        <button  type="submit">Actualizar</button>
    </form>
    
</body>
</html>