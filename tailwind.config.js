import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                'shadow-down': 'rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset',
                'shadow-up': 'rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;',
                'shadow-mac': 'rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;',
                'glass-1': '0 8px 32px 0 rgba(100, 100, 100, 0.37)',
            },
            backdropBlur: {
                'glass-1': '4px',
            },
            backgroundColor: {
                'glass-1': 'rgba(255, 255, 255, 0.25)',
            },
            borderColor: {
                'glass-1': 'rgba(255, 255, 255, 0.18)',
            },
            borderRadius: {
                'glass-1': '10px',
            },
        },
    },


    plugins: [
        forms,
        typography,
        require('daisyui'),
    ],
    daisyui: {
        themes: ['light'],  // Puedes agregar o quitar temas aquí
    },
};
