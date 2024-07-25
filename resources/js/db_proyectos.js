// No hay necesidad de crear una base de datos para los proyectos. Las imagenes se almacenan en el servidor y el texto en este archivo.
// Este objeto es importado en galeria.js y se utiliza para generar los proyectos visibles en el grid

const imgFull = {
    // Informacion de cada Proyecto
    '1': {
        'imgs': ['116', '117', '118', '1', '2', '3', '4', '5', '7', '8', '9', '120', '121', '122', '10', '11', '12', '13', '119'],
        'heading': "TusListas",
        'tecs': "Laravel - JavaScript - SASS"
    },
    '2': {
        'imgs': ['14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25'],
        'heading': "TaskTrack",
        'tecs': "PHP - JavaScript - SASS"
    },
    '3': {
        'imgs': ['26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36'],
        'heading': "DevWebCamp",
        'tecs': "PHP - JavaScript - SASS"
    },
    '4': {
        'imgs': ['37', '38', '39', '40', '41', '42'],
        'heading': "Blog Cafe",
        'tecs': "HTML - CSS"
    },
    '5': {
        'imgs': ['43', '44', '45', '46', '47', '48', '49', '50'],
        'heading': "Bienes Raices",
        'tecs': "PHP - SASS"
    },
    '6': {
        'imgs': ['51', '52', '53', '54', '55'],
        'heading': "AppSalón",
        'tecs': "JavaScript - HTML - CSS"
    },
    '7': {
        'imgs': ['56', '57', '58', '59', '60', '61'],
        'heading': "DevStagram",
        'tecs': "Laravel - TailwindCSS"
    },
    '8': {
        'imgs': ['62', '63', '64', '65'],
        'heading': "Festival",
        'tecs': "JavaScript - CSS"
    },
    '9': {
        'imgs': ['66', '67', '68', '69', '70', '71', '72', '73', '74', '75'],
        'heading': "!Jobs",
        'tecs': "Laravel - Livewire - TailwindCSS"
    },
    '10': {
        'imgs': ['76', '77', '78', '79', '80', '81'],
        'heading': "Digital Kitchen",
        'tecs': "Laravel - React"
    },
    '11': {
        'imgs': ['82', '83', '84', '85', '86', '87'],
        'heading': "JustBuyIt!",
        'tecs': "Python - Django - CSS"
    },
    '12': {
        'imgs': ['88', '89', '90'],
        'heading': "GestorGastos",
        'tecs': "React - Typescript - TailwindCSS"
    },
    '13': {
        'imgs': ['91', '92'],
        'heading': "ContadorCarlorias",
        'tecs': "React - Typescript - TailwindCSS"
    },
    '14': {
        'imgs': ['94', '93', '95', '96', '97', '98', '99'],
        'heading': "Stuff",
        'tecs': "JavaScript - CSS"
    },
    '15': {
        'imgs': ['100', '101', '103', '104', '105', '106', '107', '108', '109', '110', '111', '112', '113', '114', '115'],
        'heading': "TicketAdmin",
        'tecs': "Laravel - JavaScript - MercadoPago"
    },
    // '16': {
    //     'imgs': [''],
    //     'heading': "",
    //     'tecs': ""
    // },


    // 1_ Agregar imagenes en public/img (thumbs y grandes)
    // 2_ Agregar otro elemento en este objeto
    // 3_ Agregar elemento en los filtros de la galeria
    // Relación de las imagenes: thumbs 1.16 y grande 1.9

}

export default imgFull;