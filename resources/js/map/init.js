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
const safeBtn = document.getElementById('safe-routes');
// const mediumBtn = document.getElementById('medium-routes');
// const dangerBtn = document.getElementById('dangerous-routes');

// Eventos 'click' de los botones
// En caso de añadirse mas botones o mas datos, edita routes.dataTranspubenza por el nombre que le pusiste a la variable, por ejemplo, aqui es dataTranspubenza, entonces si el tuyo es dataTranspubenza2, seria routes.dataTranspubenza2.
safeBtn.addEventListener('click', () => {
    const { id, coordinates, waypoints = [], color } = routes.dataTranspubenza;

    addAdjustedRoute(id, color, coordinates[0], waypoints, coordinates[1]);
});

// mediumBtn.addEventListener('click', () => {
//     const { id, coordinates, waypoints = [], color } = routes.intermediate;

//     addAdjustedRoute('intermediate', color, coordinates[0], waypoints, coordinates[1]);
// });

// dangerBtn.addEventListener('click', () => {
//     const { id, coordinates, waypoints = [], color } = routes.dangerous;

//     addAdjustedRoute('dangerous', color, coordinates[0], waypoints, coordinates[1]);
// });




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
