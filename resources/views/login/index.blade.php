<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(
        // CSS
        'resources/css/login/index.css'
    )

    <title>Iniciar Sesion</title>
</head>

<body>
    <h1 class="tiltle">Inicia sesion en FAC</h1>
    <br>
    <br>
    <br>
    <form action="{{ route('login.check') }}" method="post" class="form">
        @csrf

        <span class="input-span">
            <label class="label">Correo Electronico:</label>
            <input type="email" placeholder="Ingresa tu correo electronico" name="email" required>
        </span>

        <span class="input-span">
            <label class="label">Contraseña:</label>
            <input type="password" placeholder="Ingresa tu contraseña" name="password" required>
        </span>

        <!-- Usa input submit en vez de botones, es buenas practicas y funciona mejor. -->
        <br>
        <input type="submit" value="Iniciar Sesion" class="submit">
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    @include('principal/footer')
</body>

</html>
