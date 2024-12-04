/**
 * Variable que contiene colores y ubicaciones de las rutas.
 * @type {{[key: string]: { color: string; coordinates: [number, number][], waypoints?: [number, number][] };}}
*/
export const routes = {
    dataTranspubenza: {
        id: "transpubenza", // ID Unico de dicha ruta
        color: '#00FF00', // Color hexadecimal de la ruta en el mapa

        // Coordenadas inicio-fin de la ruta, para este, en caso de copiar directamente de google maps, la ruta debe estar al revez. Es decir, si google maps te da este valor:
        // 2.4553851417535775, -76.63875814048055. Entonces seria -76.63875814048055, 2.4553851417535775, para que no haya problemas, recuerda que esto debe estar dentro de los [].
        coordinates: [[-76.63875814048055, 2.4553851417535775], [-76.6340620330549, 2.4512795398823197]],

        // Los waypoints son una adiccion en caso de que la ruta no se complete si el inicio a fin se corta o no esta bien hecho, para indicarle puntos centrales de dicha ruta, aqui se aplica la misma logica de las coordenadas.
        waypoints: [[-76.636, 2.453]]
    }
    /*
    Si deseas agregar otro valor, la estructura debe ser la misma, como esta:
    nombre: {
        id: ""
        color: ""
        coordinates: [[], []],
        waypoints: [[]]
    }

    recuerda dejar una coma en el } al añadir uno nuevo.

    Por cierto, en este caso, si añades un valor nuevo o un boton nuevo y aqui estara la data, debes ir a init.js e ir a la linea 29.
    */
};
