/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontWeight: {
          normal: '400',
          bold: '700',
          extrabold: '800',
        }
      },
    },
    plugins: [],
  }