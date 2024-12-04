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
    
        'resourses/js/button/buttoninicio.js'
    )
</head>

<body>
    <span class="ubicacionbtn">
        <ul class="ul">
            <li class="li">
                <button class="button" id="inicio">
                    <p class="p">Inicio</p>
                </button>
            </li>
        </ul>
    </span>
</body>

</html>
