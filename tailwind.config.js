/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./*.html",
    "./js/*.js",
    // "./*.{html,js,php}"
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      zIndex: {
        '60': '60',
        '70': '70',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ]
}

