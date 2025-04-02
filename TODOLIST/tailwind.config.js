import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import tailwindcss from '@tailwindcss/vite'
import { defineConfig } from 'vite'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    plugins: [
        tailwindcss(),
        
      ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
    
};
