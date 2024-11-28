<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite([
        // CSS
        'resources/css/login/index.css',
    ])

    <title>Iniciar Sesion</title>
</head>

<body>
    <form action="{{ route('login.check') }}" method="post">
        @csrf

        <div>
            <label>Correo Electronico:</label>
            <input type="email" placeholder="Ingresa tu correo electronico" name="email" required>
        </div>

        <div>
            <label>Contraseña:</label>
            <input type="password" placeholder="Ingresa tu contraseña" name="password" required>
        </div>

        <input type="submit" value="Iniciar Sesion">
    </form>
</body>

</html>
