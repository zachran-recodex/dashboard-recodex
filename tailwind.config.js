import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js'
    ],

    darkMode: 'class',

    theme: {
        extend: {
            colors: {
                'primary': {
                    50: '#E4F1FF',
                    100: '#BFDCFF',
                    200: '#95C7FF',
                    300: '#6BB1FF',
                    400: '#519FFF',
                    500: '#458EFF',
                    600: '#487FFF',
                    700: '#486CEA',
                    800: '#4759D6',
                    900: '#4536B6'
                },
                'neutral': {
                    50: '#F5F6FA',
                    100: '#F3F4F6',
                    200: '#EBECEF',
                    300: '#D1D5DB',
                    400: '#9CA3AF',
                    500: '#6B7280',
                    600: '#4B5563',
                    700: '#374151',
                    800: '#1F2937',
                    900: '#111827'
                },
                'danger': {
                    50: '#FEF2F2',
                    100: '#FEE2E2',
                    200: '#FECACA',
                    300: '#FCA5A5',
                    400: '#F87171',
                    500: '#EF4444',
                    600: '#DC2626',
                    700: '#B91C1C',
                    800: '#991B1B',
                    900: '#7F1D1D',
                    main: '#EF4A00',
                    surface: '#FCDAE2',
                    border: '#F9B5C6',
                    hover: '#D53128',
                    pressed: '#801D18',
                    focus: '#ef477026'
                },
                'success': {
                    50: '#F0FDF4',
                    100: '#DCFCE7',
                    200: '#BBF7D0',
                    300: '#86EFAC',
                    400: '#4ADE80',
                    500: '#22C55E',
                    600: '#16A34A',
                    700: '#15803D',
                    800: '#166534',
                    900: '#14532D',
                    main: '#45B369',
                    surface: '#DAF0E1',
                    border: '#B5E1C3',
                    hover: '#009F5E',
                    pressed: '#006038',
                    focus: '#45b36926'
                },
                'warning': {
                    50: '#FEFCE8',
                    100: '#FEF9C3',
                    200: '#FEF08A',
                    300: '#FDE047',
                    400: '#FACC15',
                    500: '#EAB308',
                    600: '#FF9F29',
                    700: '#f39016',
                    800: '#e58209',
                    900: '#d77907',
                    main: '#FF9F29',
                    surface: '#FFF9E2',
                    border: '#FFEBA6',
                    hover: '#D69705',
                    pressed: '#C28800',
                    focus: '#ffc02d26'
                },
                'info': {
                    50: '#EFF6FF',
                    100: '#DBEAFE',
                    200: '#BFDBFE',
                    300: '#93C5FD',
                    400: '#60A5FA',
                    500: '#3B82F6',
                    600: '#2563EB',
                    700: '#1D4ED8',
                    800: '#1E40AF',
                    900: '#1E3A8A',
                    main: '#144BD6',
                    surface: '#E7EEFC',
                    border: '#AECAFC',
                    hover: '#0A51CE',
                    pressed: '#06307C',
                    focus: '#144bd626'
                },
                'dark': {
                    1: '#1B2431',
                    2: '#273142',
                    3: '#323D4E',
                },
                'light': {
                    50: '#F5F6FA',
                    100: '#F3F4F6',
                    600: '#E4F1FF',
                    700: '#374151',
                    800: '#1F2937',
                }
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'sm': '576px',
                'md': '768px',
                'lg': '992px',
                'xl': '1200px',
                '2xl': '1400px',
                '3xl': '1650px',
            },
        },
        container: {
            center: true,
            screens: {
                sm: '540px',
                md: '720px',
                lg: '960px',
                xl: '1140px',
                '2xl': '1320px'
            }
        }
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/container-queries'),
    ],
};
