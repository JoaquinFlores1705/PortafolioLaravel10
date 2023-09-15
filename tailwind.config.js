import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        container:{
            padding: {
                'DEFAULT': '1.4rem',
                '2xl': '7rem',
              }
        },
        extend: {
            fontFamily: {
                sans: ['Work Sans', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#33B3FF',
                'secondary': '#3380FF',
                'third': '#334DFF',
                'bcolor': '#B233FF',
                'panel': '#f9fafe',
                'panel-dark': '#080c2d',
              }
        },
    },

    plugins: [forms],
};
