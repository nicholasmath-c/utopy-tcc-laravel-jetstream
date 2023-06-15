const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/tw-elements/dist/js/**/*.js'
    ],

    theme: {
        fontSize:{
            xs: '0.694rem',
            sm: '0.833rem',
            base: '1rem',
            lg: '1.2rem',
            xl: '1.44rem',
            '2xl': '1.727rem',
            '3xl': '2.074rem',
            '4xl': '2.488rem',
            '5xl': '2.986rem',
            '6xl': '3.583rem'
        },
        extend: {
            fontFamily: {
                'heading': ['Play'],
                sans: ['Roboto'],
            },

            colors: {
                'main-50': "#FFF0F3",
                'main-100': "#FFE2E9",
                'main-200': "#FFCAD9",
                'main-300': "#FF9FB9",
                'main-400': "#FF6995",
                'main-500': "#FF3273",
                'main-600': "#ED1161",
                'main-700': "#C80853",
                'main-800': "#A8094C",
                'main-900': "#8F0C47",
                'main-950': "#500123",
            },

            keyframes: {
                updown: {
                  '0%': { transform: 'translateY(0px)' },
                  '50%': { transform: 'translateY(50px)' },
                  '100%': { transform: 'translateY(0px)' },
                }
              },

              animation: {
                'updown': 'updown 4s linear infinite',
              }

        },
    },


    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('@tailwindcss/aspect-ratio'), require("tw-elements/dist/plugin.cjs"), require("tailwind-scrollbar-hide")],
    darkMode: "class"
};

