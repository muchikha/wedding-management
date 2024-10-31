import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/views/**/*.blade.php', // Includes all Blade files in views folder
      './resources/js/**/*.vue', // If you’re using Vue files
      './resources/**/*.js' // Includes any JavaScript files in resources
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
  