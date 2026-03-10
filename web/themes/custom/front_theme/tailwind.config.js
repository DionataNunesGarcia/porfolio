/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.twig",
    "./**/*.twig",
    "./src/js/**/*.js",
    "./src/scss/**/*.scss",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
