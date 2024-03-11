/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{html,php}",
    "./pages/**/*.{html,php}"
  ],
  theme: {
    extend: {},
  },
  plugins: [require('daisyui')],
}