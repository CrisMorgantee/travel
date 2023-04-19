const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        theme: {
          'gradient': 'linear-gradient(90deg, #0E93BC 0%, #0E5C94 100%);',
          'blue': '#0E93BC',
          'blue-dark': '#0E5C94',
          'pink': '#EB2F93',
          'red': '#E03F3F',
          'green': '#39CC59',
          'gray-1': '#B3B0B8',
          'gray-2': '#7C7A80',
          'gray-3': '#454652',
          'gray-4': '#2B2C33',
          'gray-5': '#1E1F24',
          'gray-6': '#101114',
        },
      },
    },

  },

  plugins: [require('@tailwindcss/forms')],
};
