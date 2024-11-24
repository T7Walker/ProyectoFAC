<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Perfil</title>
</head>
<body>
    <form action="{{route('Users.updateProfile', $publications)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            Tu Nombre:
            <br>
            <input name="name" type="text" value="{{old('name',$publication->name) }}">
            <br>
        </label>
        <br>
        <label>
            Tu correo electronico:
            <br>
            <input name="email" type="text" value="{{old('email',$publication->bookURL)}}">
            <br>
        </label>
        <label>
            Tu contraseña:
            <br>
            <input name="password" type="text" value="{{old('password',$publication->bookURL)}}">
            <br>
        </label>
        <label>
            Tu foto de perfil (Por URL):
            <br>
            <input name="URLProfileIMG" type="text" value="{{old('URLProfileIMG',$publication->bookURL)}}">
            <br>
        </label>
        <br>
        <button  type="submit">Actualizar</button>
    </form>
    
</body>
</html>