<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{route('login')}}" method="POST">
    @csrf

    <div>
        <label>Correo Electronico:</label>
        <input type="text" name="Company" required>
    </div>
    <br>
    <div>
        <label>Contraseña:</label>
        <input type="text" name="password" required>
    </div>
    <button type="submit">inicia sesion</button>
</form>
    
</body>
</html>