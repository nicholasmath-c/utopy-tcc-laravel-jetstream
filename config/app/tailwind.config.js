const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
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
                redMain: "#FF3273",
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
