const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/**/*.blade.php',
        './resources/views/**/**/**/*.blade.php',
    ],
    themes: ["light", "dark", "cupcake"],

    theme: {
        extend: {
            colors: {
                kuning: '#EAB347',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },

    },

    plugins: [require("daisyui")],
};
