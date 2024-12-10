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
        color: '00ff66',

        coordinates: [[-76.57789797663554, 2.4830033725588168], [-76.59976627257036, 2.4563116512112106]],
        waypoints: [[-76.6161530054716, 2.4372029462617397], [-76.598330, 2.451995], [-76.59377724106312, 2.4594503112741317]]
    },

    dataTranspubenzaTP2M: {

        id: "transpubenzaTP2M",
        color: '00ffd2',

        coordinates: [[-76.63577549832756, 76.63577549832756], [-76.56348768622935, 2.490428365801495]],

        waypoints: [[-76.60812314410266, 2.4514055711682294], [, -76.60812314410266, 2.4514055711682294]]

    },

    dataTranspubenzaTP4BT: {

        id: "trasnpubenzaTP4BT",
        color: '009aff',

        coordinates: [[-76.57172299402527, 2.4756525421968987], [-76.64361849764964, 2.4589913584006817]],

        waypoints: [[-76.572343, 2.474578], [-76.61638532324054, 2.437322952846013]]

    },

    dataTranspubenzaTP5BT: {

        id: "transpubenzaTP5BT",
        color: '0032ff',

        coordinates: [[-76.58705588829557, 2.459075310549009], [-76.57789797663554, 2.4830033725588168]],

        waypoints: [[-76.598330, 2.451995], [-76.61638532324054, 2.437322952846013], [-76.60626248501909, 2.4420091044200714], [-76.60626248501909, 2.4420091044200714]]

    },

    dataTranspubenzaTP5M: {

        id: "transpubenzaTP5M",
        color: '7100ff',

        coordinates: [[-76.60002708444877, -76.60002708444877], [-76.60812314410266, 2.4514055711682294]],

        waypoints: [[-76.60785887938471, 2.440510994315813], [-76.59384670547122, 2.458605046546787], [-76.56219983060814, 2.4833509558581675], [-76.60266439065292, 2.4311458105276187]]

    },

    dataTranspubenzaTP6BT: {

        id: "transpubenzaTP6BT",
        color: '9f00ff',

        coordinates: [[-76.560550, 2.478068], [-76.63577549832756, 2.4592459591277938]],

        waypoints: [[-76.55872442332779, 2.5377966087305537], [-76.61638532324054, 2.437322952846013]]

    },

    dataTranspubenzaTP7BT: {

        id: "transpubenzaTP7BT",
        color: 'd100ff',

        coordinates: [[-76.57172299402527, 2.4756525421968987], [-76.61638532324054, 2.437322952846013]],

        waypoints: [[-76.59377724106312, 2.4594503112741317], [-76.62211931475495, 2.449933142250489]]

    },

    dataTranspubenzaTP7M: {

        id: "transpubenza",
        color: 'ff00e4',

        coordinates: [[-76.64361849764964, 2.4589913584006817], [-76.63763339918368, 2.460421423158193]],

        waypoints: [[-76.61494294924132, 2.444562228104457], [-76.60785887938471, 2.440510994315813]]

    },

    dataTranspubenzaTP8BT: {

        id: "transpubenzaTP8BT",
        color: 'ff0056',

        coordinates: [[-76.63577549832756, 2.4592459591277938], [-76.58228554225903, 2.4931367111446803]],

        waypoints: [[-76.55916660063244, 2.488083394677079], [-76.57789797663554, 2.4830033725588168], [-76.61494294924132, 2.444562228104457], [-76.61638532324054, 2.437322952846013]]

    },

    dataTranspubenzaTP8M: {

        id: "transpubenzaTP8M",
        color: 'ff0000',

        coordinates: [[-76.60956942737855, 2.4428450855422685], [-76.58228554225903, 2.4931367111446803]],

        waypoints: [[-76.6161530054716, 2.444562228104457], [-76.61494294924132, 2.444562228104457], [-76.60770390438738, 2.447519568860753]]

    },

    dataTranspubenzaTP9M: {

        id: "transpubenzaTP9M",
        color: 'ff7000',

        coordinates: [[-76.63577549832756, 2.4592459591277938], [-76.54984061443642, 2.5886072044392026]],

        waypoints: [[-76.57789797663554, 2.4830033725588168], [-76.61638532324054, 2.437322952846013], [-76.60785887938471, 2.440510994315813]]

    },

    dataTranspubenzaTP10M: {

        id: "transpubenzaTP10M",
        color: 'ffb000',

        coordinates: [[-76.64361849764964, 2.4589913584006817], [-76.56219983060814, 2.4833509558581675]],

        waypoints: [[-76.61494294924132, 2.444562228104457], [-76.59377724106312, 2.4594503112741317]]

    },

    dataTranspubenzaTP11M: {

        id: "transpubenzaTP11M",
        color: 'ffe800',

        coordinates: [[-76.62526577998091, 2.437461697949201], [-76.54964858595915, 2.5023046551103594]],

        waypoints: [[-76.60785887938471, 2.440510994315813], [-76.58714663301004, 2.459517777857481], [-76.55872442332779, 2.5377966087305537]]

    },

    dataTrastamboTT1M: {

        id: "transtamboTT1M",
        color: '00ff00',

        coordinates: [[-76.57741069196808, 2.480086474139963], [-76.64361849764964, 2.4589913584006817]],

        waypoints: [[-76.57168007875151, 2.4758026057149753], [-76.598330, 2.451995], [-76.607677, 2.434335], [-76.605823, 2.433860]]

    },

    dataTrastamboTT2M: {

        id: "transtamboTT2M",
        color: '00ff69',

        coordinates: [[-76.54616854674597, 2.4690341235207685], [-76.64361849764964, 2.4589913584006817]],

        waypoints: [[-76.58000914965152, 2.475514736349955], [-76.56219983060814, 2.4833509558581675], [-76.60785887938471, 2.440510994315813]]

    },

    dataTrastamboTT3M: {

        id: "transtamboTT3M",
        color: '00ffa5',

        coordinates: [[-76.64361849764964, 2.4589913584006817], [-76.60261247292266, 2.443829479332352]],

        waypoints: [[-76.57789797663554, 2.4830033725588168], [-76.57635618077731, 2.4892606542727664], [-76.6161530054716, 2.4372029462617397]]

    },

    dataTrastamboTT4M: {

        id: "transtamboTT4M",
        color: '00ffd8',

        coordinates: [[-76.54143381949821, 2.4665153516266276], [-76.63277152872489, 2.4515738245266]],

        waypoints: [[-76.560550, 2.478068], [-76.5622504504903, 2.4835425931019963], [-76.608747, 2.442140]]

    },

    dataTrastamboTT5M: {

        id: "transtamboTT5M",
        color: '00c7ff',

        coordinates: [[-76.64101610260742, 2.465905760680773], [-76.584914, 2.486593]],

        waypoints: [[-76.608604, 2.442056], [-76.591384, 2.456580], [-76.58088768600648, 2.4644266075896626], [-76.579836, 2.475488], [-76.577315, 2.482724]]

    },

    dataTrastamboTT6M: {

        id: "transtamboTT6M",
        color: '006dff',

        coordinates: [[-76.54143381949821, 2.4665153516266276], [-76.66608218778305, 2.471234713800341]],

        waypoints: [[-76.560550, 2.478068], [-76.61494294924132, 2.444562228104457]]

    },

    dataSotracaucaSC1M: {

        id: "sotracaucaSC1M",
        color: '00ff00',

        coordinates: [[-76.560550, 2.478068], [-76.6161530054716, 2.4372029462617397]],

        waypoints: [[-76.59377724106312, 2.4594503112741317], [-76.60200669751075, 2.4438155124172405]]

    },

    dataSotracaucaSC2M: {

        id: "sotracaucaSC2M",
        color: '00ff69',

        coordinates: [[-76.560550, 2.478068], [-76.64361849764964, 2.4589913584006817]],

        waypoints: [[-76.60812314410266, 2.4514055711682294], [-76.60865074965159, 2.443514445601197]]

    },

    dataSotracaucaSC3M: {

        id: "sotracaucaSC3M",
        color: '00ffba',

        coordinates: [[-76.63296714741794, 2.45124191305721], [-76.60627916928512, 2.449293210761546]],

        waypoints: [[-76.57789797663554, 2.4830033725588168], [-76.6161530054716, 2.4372029462617397], [-76.58994088337815, 2.4587387750506653]]

    },

    dataSotracaucaSC4M: {

        id: "sotracaucaSC4M",
        color: '00f6ff',

        coordinates: [[-76.614892, 2.445504], [-76.58076884417345, 2.4608779626786443]],

        waypoints: [[-76.60799901394866, 2.4337531591090613], [-76.58771526130765, 2.460278822964992]]

    },

    dataSotracaucaSC5M: {

        id: "sotracaucaSC5M",
        color: '00baff',

        coordinates: [[-76.560550, 2.478068], [-76.57789797663554, 2.4830033725588168]],

        waypoints: [[-76.59382881076533, 2.458611580100939], [-76.60804078958923, 2.440521829491434]]

    },

    dataSotracaucaSC6M: {

        id: "sotracaucaSC6M",
        color: 'fff100',

        coordinates: [[-76.560550, 2.478068], [-76.63296714741794, 2.45124191305721]],

        waypoints: [[-76.58771526130765, 2.460278822964992], [-76.60804078958923, 2.440521829491434], [-76.6161530054716, 2.4372029462617397]]

    },

    dataSotracaucaSC7M: {

        id: "sotracaucaSC7M",
        color: '006dff',

        coordinates: [[-76.64411717195075, 2.477588568098543], [-76.55844376747618, 2.5031104895069367]],

        waypoints: [[2.440521829491434, -76.60804078958923], [-76.614892, 2.445504]]

    },

    dataSotracaucaSC8M: {

        id: "sotracaucaSC8M",
        color: '006dff',

        coordinates: [[-76.63296714741794, 2.45124191305721], [-76.57669186001755, 2.4809439768806785]],

        waypoints: [[-76.614892, 2.445504], [-76.60804078958923, 2.440521829491434], [-76.57669186001755, 2.4709969122724624]]

    },

    dataSotracaucaSC9M: {

        id: "sotracaucaSC9M",
        color: '006dff',

        coordinates: [[-76.64411717195075, 2.477588568098543], [-76.560550, 2.478068]],

        waypoints: [[-76.57789797663554, 2.4830033725588168], [-76.56176127905327, 2.4847868330734175]]

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
