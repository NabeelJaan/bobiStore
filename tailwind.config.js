const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },


        extend: {
            fontFamily: {
                'poppins': ['Poppins', 'sans-serif'],
            },
            backgroundColor: {
                'darkBlue'     : '#092143',
                'darkOrange'   : '#f4a51c',
                'lightGray'    : '#F7F7F7',
                'darkGray'     : '#F6F6F6sss'
            },
            textColor: {
                'Gray'         : '#CEC7B2',
                'White'        : '#3A4D69',
                'lightBlack'   : '#333333'
            },
        },


        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
