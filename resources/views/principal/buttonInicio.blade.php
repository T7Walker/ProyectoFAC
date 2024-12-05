<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        const indexPage = "{{ route('mainPage.index') }}";
    </script>
    @vite(
        'resources/css/principal/buttoninicio.css',
    
        'resourses/js/button/inicio.js'
    )
</head>

<body>
    <span class="ubicacionbtn">
        <button class="shadow__btn" id="inicio">Inicio</button>
    </span>
</body>

</html>
