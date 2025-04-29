import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'bodyskin': {
                    'dark': '#1A1A1A',    // Color plomo oscuro del fondo
                    'blue': '#00B7FF',     // Color azul del texto
                },
            },
        },
    },

    darkMode: 'class', // Habilitar el modo oscuro

    plugins: [forms],
};
