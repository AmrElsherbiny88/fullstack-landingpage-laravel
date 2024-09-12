/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {},
    },
    plugins: [require('daisyui')],

    daisyui: {
      themes: ["forest", "light"]// Set "dark" as the default theme
    },
  };
  