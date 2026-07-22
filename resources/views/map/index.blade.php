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
                    <button id="TP1BTroute"><span></span>Ruta TP1BT</button>
                    <button id="TP2BTroute"><span></span>Ruta TP2BT</button>
                    <button id="TP2Mroute"><span></span>Ruta TP2M</button>
                    <button id="TP4BTroute"><span></span>Ruta TP4BT</button>
                    <button id="TP5BTroute"><span></span>Ruta TP5BT</button>
                    <button id="TP5Mroute"><span></span>Ruta TP5M</button>
                    <button id="TP6BTroute"><span></span>Ruta TP6BT</button>
                    <button id="TP7BTroute"><span></span>Ruta TP7BT</button>
                    <button id="TP7Mroute"><span></span>Ruta TP7M</button>
                    <button id="TP9BTroute"><span></span>Ruta TP9BT</button>
                    <button id="TP8Mroute"><span></span>Ruta TP8M</button>
                    <button id="TP9Mroute"><span></span>Ruta TP9M</button>
                    <button id="TP10Mroute"><span></span>Ruta TP10M</button>
                    <button id="TP11Mroute"><span></span>Ruta TP11M</button>
                </section>

                <section class="map-controls yellow-column" name="Transtambo">
                    <h3>Transtambo</h3>
                    <button id="TT1Mroute"><span></span>Ruta TT1M</button>
                    <button id="TT2Mroute"><span></span>Ruta TT2M</button>
                    <button id="TT3Mroute"><span></span>Ruta TT3M</button>
                    <button id="TT4Mroute"><span></span>Ruta TT4M</button>
                    <button id="TT5Mroute"><span></span>Ruta TT5M</button>
                    <button id="TT6Mroute"><span></span>Ruta TT6M</button>
                </section>

                <section class="map-controls red-column" name="Sotracauca">
                    <h3>Sotracauca</h3>
                    <button id="SC1Mroute"><span></span>Ruta SC1M</button>
                    <button id="SC2Mroute"><span></span>Ruta SC2M</button>
                    <button id="SC3Mroute"><span></span>Ruta SC3M</button>
                    <button id="SC4Mroute"><span></span>Ruta SC4M</button>
                    <button id="SC5Mroute"><span></span>Ruta SC5M</button>
                    <button id="SC6Mroute"><span></span>Ruta SC6M</button>
                    <button id="SC7Mroute"><span></span>Ruta SC7M</button>
                    <button id="SC8Mroute"><span></span>Ruta SC8M</button>
                    <button id="SC9Mroute"><span></span>Ruta SC9M</button>
                </section>
            </nav>
        </div>
    </main>
    <br><br><br><br><br><br>
    @include('principal.footer')
</body>


</html>
