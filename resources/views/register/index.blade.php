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
    <div class="tiltle">
        <h1>Registrate en FAC</h1>
    </div>
    <form action="{{ route('register.saveUser') }}" method="post" class="form">
        @csrf

        <span class="input-span">
            <label class="label">Correo electronico:</label>
            <input type="email" name="email" placeholder="Ingresa tu correo electronico" required>
        </span>

        <span class="input-span">
            <label class="label">Contraseña:</label>
            <input type="password" name="password" placeholder="Ingresa tu  contraseña" required>
        </span>

        <span class="input-span">
            <label class="label">Nombre:</label>
            <input type="text" name="name" placeholder="Ingresa tu nombre de usuario" required>
        </span>

        <span class="input-span">
            <label class="label">URL de la Foto de Perfil:</label>
            <input type="text" name="urlimg" placeholder="URL de tu imagen aqui" required>
        </span>

        <!-- Usa input submit en vez de botones, es buenas practicas y funciona mejor. -->
        <input type="submit" value="Registrarse" class="submit">
    </form>
    @include('principal/footer')
</body>

</html>
