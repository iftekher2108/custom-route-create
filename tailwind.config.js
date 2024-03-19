import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    daisyui: {
        themes: [{
            mytheme: {

                "primary": "#0093ff",

                "secondary": "#b59600",

                "accent": "#00daff",

                "neutral": "#24130e",

                "base-100": "#202528",

                "info": "#00c1ff",

                "success": "#00c375",

                "warning": "#ffa000",

                "error": "#ff96a6",
            },
        }, ],
    },
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, require("daisyui")],
};
