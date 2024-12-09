<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>

    @vite([
        // CSS
        'resources/css/map/index.css',
    
        // JS
        'resources/js/map/init.js',
    ])

    <title>Mapa</title>
</head>

<body>
    <nav>
        @include('principal.navbar')
    </nav>
    <main>
        <div class="contendor">
            <section class="map-container">
                <div id="map"></div>
            </section>
        </div>
        <br><br>
        <div>
            <nav class="contendor">
                <section class="map-controls">
                    <button id="TP1BTroute">RutaTP1BT Transpubenza</button>
                    <button id=""></button>
                </section>
            </nav>
        </div>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    @include('principal.footer')
</body>

</html>
