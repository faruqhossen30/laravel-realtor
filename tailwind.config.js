import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            typography: {
                DEFAULT: {
                    css: {
                        maxWidth: '100%', // add required value here
                    }
                }
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand': '#F8931D',
                'primary': '#371F18'
            },
            width: {
                'cal30': 'calc(100% - 30px) !important',
                'cal40': 'calc(100% - 40px) !important',
            },
        },
    },

    plugins: [forms, require('flowbite/plugin'), require('@tailwindcss/typography')],
};
