import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                body: ["Inter", "sans-serif"],
                heading: ["Cabinet Grotesk", "sans-serif"],
            },
                colors: {
                primary: "#4e69b6ff",
                body: {
                color: "#061d19",
                bg: "#e5f0f3ff",
                },
                dark: "#061d19",
            },
        },
    },

    plugins: [
        forms,
        require("@tailwindcss/typography"),
    ],
};
