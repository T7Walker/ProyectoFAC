import { routes } from "./routes"; // Se importa las variables de las rutas ya predefinidas

// Token publico de la pagina de la cuenta que se uso.
mapboxgl.accessToken = 'pk.eyJ1Ijoid2Fsa2VydHciLCJhIjoiY200MjNqdXAyMnB1YjJqcTJubXN5N21oZCJ9.XgVtzZv0TjyIC4Y2NHvhVw';

// Pre-configuracion del mapa a mostrar en la pagina
// Mas informacion o configuracion de la api, esta en https://docs.mapbox.com/mapbox-gl-js/api/map/
const map = new mapboxgl.Map({
    container: 'map', // Es un mapa
    style: 'mapbox://styles/mapbox/dark-v11', // Estilo del mapa
    center: [-76.6092, 2.4448], // El centro por defecto del mapa
    zoom: 14 // El zoom por defecto del mapa
});

const nav = new mapboxgl.NavigationControl(); // Para añadir movilidad al mapa

map.addControl(nav, 'top-right'); // Por defecto
new mapboxgl.Marker().setLngLat([-76.6092, 2.4448]).setPopup(new mapboxgl.Popup().setText('Popayán, Cauca')).addTo(map); // Se añade una marca por defecto a Popayán




// Aqui estan los botones

//RUTAS TRANSPUBENZA

const TP1BTBtn = document.getElementById('TP1BTroute')
const TP2BTBtn = document.getElementById('TP2BTroute')
const TP2MBtn = document.getElementById('TP2Mroute')
const TP4BTBtn = document.getElementById('TP4BTroute')
const TP5BTBtn = document.getElementById('TP5BTroute')
const TP5MBtn = document.getElementById('TP5Mroute')
const TP6BTBtn = document.getElementById('TP6BTroute')
const TP7BTBtn = document.getElementById('TP7BTroute')
const TP7MBtn = document.getElementById('TP7Mroute')
const TP8BTBtn = document.getElementById('TP9BTroute')
const TP8MBtn = document.getElementById('TP8Mroute')
const TP9MBtn = document.getElementById('TP9Mroute')
const TP10MBtn = document.getElementById('TP10Mroute')
const TP11MBtn = document.getElementById('TP11Mroute')

//RUTAS TRANSTAMBO

const TT1MBtn = document.getElementById('TT1Mroute')
const TT2Mbtm = document.getElementById('TT2Mroute')
const TT3MBtn = document.getElementById('TT3Mroute')
const TT4MBtn = document.getElementById('TT4Mroute')
const TT5MBtn = document.getElementById('TT5Mroute')
const TT6MBtn = document.getElementById('TT6Mroute')

//RUTAS SOTRACAUCA

const SC1MBtn = document.getElementById('SC1Mroute')
const SC2MBtn = document.getElementById('SC2Mroute')
const SC3MBtn = document.getElementById('SC3Mroute')
const SC4MBtn = document.getElementById('SC4Mroute')
const SC5MBtn = document.getElementById('SC5Mroute')
const SC6MBtn = document.getElementById('SC6Mroute')
const SC7MBtn = document.getElementById('SC7Mroute')
const SC8MBtn = document.getElementById('SC8Mroute')
const SC9MBtn = document.getElementById('SC9Mroute')



// Eventos 'click' de los botones
// En caso de añadirse mas botones o mas datos, edita routes.dataTranspubenza por el nombre que le pusiste a la variable, por ejemplo, aqui es dataTranspubenza, entonces si el tuyo es dataTranspubenza2, seria routes.dataTranspubenza2.


//RUTAS TRANSPUBENZA

TP1BTBtn.addEventListener('click', () => {
    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP1BT;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);
});

TP2BTBtn.addEventListener('click', () => {
    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP2BT;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);
});

TP2MBtn.addEventListener('click', () => {
    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP2M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);
});

TP4BTBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP4BT;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);
});

TP5BTBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP5BT;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TP5MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP5M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TP6BTBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP6BT;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TP7BTBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP7BT;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});


TP7MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP7M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TP8BTBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP8BT;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TP8MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP8M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TP9MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP9M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TP10MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP10M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TP11MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenzaTP11M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

//RUTAS TRANSTAMBO

TT1MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTrastamboTT1M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TT2Mbtm.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTrastamboTT2M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TT3MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTrastamboTT3M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TT4MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTrastamboTT4M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TT5MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTrastamboTT5M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

TT6MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataTrastamboTT6M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

//RUTAS SOTRACAUCA

SC1MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataSotracaucaSC1M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

SC2MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataSotracaucaSC2M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

SC3MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataSotracaucaSC3M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

SC4MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataSotracaucaSC4M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

SC5MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataSotracaucaSC5M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

SC6MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataSotracaucaSC6M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

SC7MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataSotracaucaSC7M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

SC8MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataSotracaucaSC8M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});

SC9MBtn.addEventListener('click', () => {

    const { id, coordinates, waypoints = [], color } = routes.dataSotracaucaSC9M;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);

});




/**
 * Una funcion asincrona para ajustar y crear las rotas tomando en cuenta las delimitaciones de las vias del mapa.
 * @async
 * @param {String} id ID Unico de la ruta.
 * @param {String} color Color de dicha ruta.
 * @param {Number[]} start Coordenadas iniciales de dicha ruta.
 * @param {Number[][]} waypoints Coordenadas intermedias.
 * @param {Number[]} end Coordenadas finales de dicha ruta.
 * @returns {Void}
 */
async function addAdjustedRoute(id, color, start, waypoints, end) {
    const coordinates = await getRoute(start, waypoints, end);

    if (map.getLayer(id)) map.removeLayer(id);
    if (map.getSource(id)) map.removeSource(id);

    map.addSource(id, {
        type: 'geojson',
        data: {
            type: 'Feature',
            properties: {},
            geometry: {
                type: 'LineString',
                coordinates: coordinates
            }
        }
    });

    map.addLayer({
        id: id,
        type: 'line',
        source: id,
        layout: { 'line-join': 'round', 'line-cap': 'round' },
        paint: { 'line-color': color, 'line-width': 5 }
    });
};

/**
 * Funcion que obtiene de forma asincrona las rutas con sus respectivas limitaciones de las vias para el mapa.
 * @async
 * @param {Number[]} start Coordenadas iniciales.
 * @param {Number[][]} waypoints Coordenadas intermedias.
 * @param {Number[]} end Coordenadas finales.
 * @returns {Number[][]} Coordenadas de la ruta ajustada.
 */
async function getRoute(start, waypoints = [], end) {
    const allPoints = [start, ...waypoints, end];
    const invalidPoints = allPoints;
    const allPointsString = allPoints.map(point => point.join(',')).join(';');
    const query = `https://api.mapbox.com/directions/v5/mapbox/driving/${allPointsString}?geometries=geojson&access_token=${mapboxgl.accessToken}`;
    const response = await fetch(query);
    const data = await response.json();

    return data.routes[0].geometry.coordinates;
};
