/** @type {import('tailwindcss').Config} */
module.exports = {
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
  content: [
    "./resources/views/**/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily : {
        Open : "Open Sans",
        Nunito : "Nunito Sans"
      }
    },
  },
}
