/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "node_modules/preline/dist/*.js",

  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ["InterVariable", ...defaultTheme.fontFamily.sans],
        },
    },
},
  plugins: [require("flowbite/plugin"),
    require('daisyui'),require('flowbite-typography'),
  require('preline/plugin'),
  ],
}