/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./templates/**/*.twig",
    "./**/*.twig",
    "./src/js/**/*.js",
    "./src/scss/**/*.scss",
  ],
  theme: {
    container: {
      center: true,
      padding: "1.5rem",
    },
    extend: {},
  },
  plugins: [],
};
