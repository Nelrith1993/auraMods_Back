import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/*.vue',
        './resources/js/**/*.vue',
        './resources/js/**/**/*.vue',
    ],
    
    daisyui: {
        themes: [
            {
                mytheme: {

                    "primary": "#a855f7",

                    "secondary": "#eab308",

                    "accent": "#a3e635",

                    "neutral": "#1c1917",

                    "base-100": "#292524",

                    "info": "#22d3ee",

                    "success": "#2aed73",

                    "warning": "#fde047",

                    "error": "#f87171",
                },
            },
        ],
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography, daisyui],
};
