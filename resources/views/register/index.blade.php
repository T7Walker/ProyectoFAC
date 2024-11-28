<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite([
        // CSS
        'resources/css/register/index.css',
    ])

    <title>Registrate</title>
</head>

<body>
    <form action="{{ route('register.saveUser') }}" method="post">
        @csrf

        <label>Correo electronico:</label>
        <input type="email" name="email" placeholder="Ingresa tu correo electronico" required>
        <br>

        <label>Contraseña:</label>
        <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
        <br>

        <label>Nombre:</label>
        <input type="text" name="username" placeholder="Ingresa tu nombre de usuario" required>
        <br>

        <label>URL de la Foto de Perfil:</label>
        <input type="text" name="url_photo" placeholder="URL de tu imagen aqui" required>
        <br>
		
        <!-- Usa input submit en vez de botones, es buenas practicas y funciona mejor. -->
        <input type="submit" value="Registrarse">
    </form>
</body>

</html>
