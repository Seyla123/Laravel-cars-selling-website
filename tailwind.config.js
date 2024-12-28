import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                main: {
                    100: '#f4e4ff',
                    200: '#e6d2fc',
                    300: '#d7bdee',
                    400: '#c984f7',
                    500: '#b370fb',
                    600: '#a256f2',
                    700: '#8e44ad',
                    800: '#7a00e6',
                    900: '#6c2dd5',
                },
            },
        },
    },
    plugins: [],
};
