/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontSize: {
        "10-xl": "16rem"
      },
      transitionProperty: {
        'width': 'width'
      }
    },
  },
  plugins: [],
}

