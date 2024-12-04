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
    <main>
        <section class="map-container">
            <div id="map"></div>
        </section>

        <section class="map-controls">
            <button id="safe-routes">Rutas Transpubenza</button>
            {{-- <button id="medium-routes">Rutas Intermedias</button>
            <button id="dangerous-routes">Rutas Peligrosas</button> --}}
        </section>

    </main>
</body>

</html>
