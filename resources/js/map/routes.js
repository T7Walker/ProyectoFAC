/**
 * Variable que contiene colores y ubicaciones de las rutas.
 * @type {{[key: string]: { color: string; coordinates: [number, number][], waypoints?: [number, number][] };}}
*/
export const routes = {
    dataTranspubenzaTP1BT: {
        id: "transpubenzaTP1BT", // ID Unico de dicha ruta
        color: '#00FF00', // Color hexadecimal de la ruta en el mapa

        // Coordenadas inicio-fin de la ruta, para este, en caso de copiar directamente de google maps, la ruta debe estar al revez. Es decir, si google maps te da este valor:
        // 2.4553851417535775, -76.63875814048055. Entonces seria -76.63875814048055, 2.4553851417535775, para que no haya problemas, recuerda que esto debe estar dentro de los [].
        coordinates: [[-76.560550, 2.478068], [-76.63577549832756, 2.4592459591277938]],

        // Los waypoints son una adiccion en caso de que la ruta no se complete si el inicio a fin se corta o no esta bien hecho, para indicarle puntos centrales de dicha ruta, aqui se aplica la misma logica de las coordenadas.
        waypoints: [[-76.61494294924132, 2.444562228104457], [-76.57789797663554, 2.4830033725588168]]
    },

    dataTranspubenzaTP2BT: {

        id: "transpubenzaTP2BT",
        color: "00ff66",

        coordinates: [[-76.57789797663554, 2.4830033725588168], [-76.59976627257036, 2.4563116512112106]],
        waypoints: [[-76.6161530054716, 2.4372029462617397], [-76.598330, 2.451995], [-76.59377724106312, 2.4594503112741317]]
    },

    dataTranspubenzaTP2M: {

        id: "transpubenzaTP2M",
        color: "00ffd2",

        coordinates: [[-76.63577549832756, 76.63577549832756], [-76.56348768622935, 2.490428365801495]],

        waypoints: [[-76.60812314410266, 2.4514055711682294], [, -76.60812314410266, 2.4514055711682294]]

    },

    dataTranspubenzaTP4BT: {

        id: "trasnpubenzaTP4BT",
        color: "009aff",

        coordinates: [[-76.57172299402527, 2.4756525421968987], [-76.64361849764964, 2.4589913584006817]],

        waypoints: [[-76.572343, 2.474578], [-76.61638532324054, 2.437322952846013]]

    },

    dataTranspubenzaTP5BT: {

        id: "transpubenzaTP5BT",
        color: "0032ff",

        coordinates: [[-76.58705588829557, 2.459075310549009], [-76.57789797663554, 2.4830033725588168]],

        waypoints: [[-76.598330, 2.451995], [-76.61638532324054, 2.437322952846013], [-76.60626248501909, 2.4420091044200714], [-76.60626248501909, 2.4420091044200714]]

    },

    dataTranspubenzaTP5M: {

        id: "transpubenzaTP5M",
        color: "7100ff",

        coordinates: [[-76.60002708444877, -76.60002708444877], [-76.60812314410266, 2.4514055711682294]],

        waypoints: [[-76.60785887938471, 2.440510994315813], [-76.59384670547122, 2.458605046546787], [-76.56219983060814, 2.4833509558581675], [-76.60266439065292, 2.4311458105276187]]

    },

    dataTranspubenzaTP6BT: {

        id: "transpubenzaTP6BT",
        color: "9f00ff",

        coordinates: [[-76.560550, 2.478068], [-76.63577549832756, 2.4592459591277938]],

        waypoints: [[-76.55872442332779, 2.5377966087305537], [-76.61638532324054, 2.437322952846013]]

    },

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
