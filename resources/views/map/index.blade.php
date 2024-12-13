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

    <h1 class="colorTitulo">Mapa</h1>

    <br>
    <br>
    <br>

    <main>
        <div class="contendor">
            <section class="map-container">
                <div id="map"></div>
            </section>
        </div>
        <br><br>
        <br>
        <br>
        <br>
        <!-- Organización de botones en columnas -->
        <div>
            <nav class="contendor">
                <section class="map-controls blue-column" name="transpubenza-Routes">
                    <h3>Transpubenza</h3>
                    <button id="TP1BTroute">Ruta TP1BT</button>

                    <button id="TP2BTroute">Ruta TP2BT</button>

                    <button id="TP2Mroute">Ruta TP2M</button>

                    <button id="TP4BTroute">Ruta TP4BT</button>

                    <button id="TP5BTroute">Ruta TP5BT</button>

                    <button id="TP5Mroute">Ruta TP5M</button>

                    <button id="TP6BTroute">Ruta TP6BT</button>

                    <button id="TP7BTroute">Ruta TP7BT</button>

                    <button id="TP7Mroute">Ruta TP7M</button>

                    <button id="TP9BTroute">Ruta TP9BT</button>

                    <button id="TP8Mroute">Ruta TP8M</button>

                    <button id="TP9Mroute">Ruta TP9M</button>

                    <button id="TP10Mroute">Ruta TP10M</button>

                    <button id="TP11Mroute">Ruta TP11M</button>
                </section>

                <section class="map-controls yellow-column" name="Transtambo">
                    <h3>Transtambo</h3>
                    <button id="TT1Mroute">Ruta TT1M</button>
                    <button id="TT2Mroute">Ruta TT2M</button>
                    <button id="TT3Mroute">Ruta TT3M</button>
                    <button id="TT4Mroute">Ruta TT4M</button>
                    <button id="TT5Mroute">Ruta TT5M</button>
                    <button id="TT6Mroute">Ruta TT6M</button>
                </section>

                <section class="map-controls red-column" name="Sotracauca">
                    <h3>Sotracauca</h3>
                    <button id="SC1Mroute">Ruta SC1M</button>
                    <button id="SC2Mroute">Ruta SC2M</button>
                    <button id="SC3Mroute">Ruta SC3M</button>
                    <button id="SC4Mroute">Ruta SC4M</button>
                    <button id="SC5Mroute">Ruta SC5M</button>
                    <button id="SC6Mroute">Ruta SC6M</button>
                    <button id="SC7Mroute">Ruta SC7M</button>
                    <button id="SC8Mroute">Ruta SC8M</button>
                    <button id="SC9Mroute">Ruta SC9M</button>
                </section>
            </nav>
        </div>
    </main>
    <br><br><br><br><br><br>
    @include('principal.footer')
</body>


</html>
