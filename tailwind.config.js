import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                serif: ['Figtree', ...defaultTheme.fontFamily.serif],
            },
        },
        fontSize: {
            '13xl': ['13rem', {
                lineHeight: '13rem',
                letterSpacing: '-0.01em',
                fontWeight: '900',
            }],
        },
    },



    plugins: [forms],
};
