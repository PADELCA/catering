/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/views/**/*.blade.php',
      './resources/js/**/*.js',
      './resources/js/**/*.vue',
      './node_modules/preline/**/*.js',
      
    ],

    darkMode: 'class',
    theme: {
      extend: {},
    },
    plugins: [
         require('preline/plugin'),
    ],
  }