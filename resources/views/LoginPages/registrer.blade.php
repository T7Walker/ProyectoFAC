<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    @vite(['resources/css/registrer.css'])
</head>
<body>
    <h2>Bienvenido a FAC, Registrate</h2>
    <form action="{{ route('LoginPages.registrer') }}" method="GET" enctype="multiplart/form-data">

    @csrf 

    <label>Nombre:</label>
    <input type="text" name="name">
    <br>
    <label>Correo Electronico:</label>
    <input type="text" name="Company">
    <br>
    <label>Contraseña:</label>
    <input type="text" name="password">
    <button type="submit">Registrarte</button>
    <br>
    <label>Pon la url de tu foto de Perfil:</label>
    <input type="text" name="URLProfileIMG">
    <button type="submit">Registrarte</button>

    </form>
    
</body>
</html>