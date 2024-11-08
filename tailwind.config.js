import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue', 
    './resources/**/*.js',
    './resources/**/*.html', // If using HTML templates
  ],
  theme: {
    extend: {
      colors: {
        customBlue: '#1e40af', // Custom color example
      },
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans], // Extending default font family
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'), // Optional: forms plugin
  ],
}
