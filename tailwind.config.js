/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/wireui/wireui/src/*.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/WireUi/**/*.php',
        './vendor/wireui/wireui/src/Components/**/*.php',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', 'sans-serif'],
                mono: ['Source Code Pro', 'monospace'],
            },
            colors: {
                primary: {
                    DEFAULT: '#86c332',
                    50: '#f6fbea',
                    100: '#e9f6d1',
                    200: '#d3eda9',
                    300: '#b6df77',
                    400: '#9acf4c',
                    500: '#86c332',
                    600: '#5f8f21',
                    700: '#496e1d',
                    800: '#3d571d',
                    900: '#344b1c',
                    950: '#19290a',
                },
                background: {
                    light: '#f4f6f7',
                    dark: '#23262b',
                },
                shark: {
                    50: '#f4f6f7',
                    100: '#e3e7ea',
                    200: '#cbd1d6',
                    300: '#a7b1b9',
                    400: '#7b8995',
                    500: '#606d7a',
                    600: '#525c68',
                    700: '#474f57',
                    800: '#3f444b',
                    900: '#373b42',
                    950: '#23262b',
                },
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
