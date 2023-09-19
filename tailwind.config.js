/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      colors: {
        'mygrey': {
          50: '#303030',
          100: '#3E4347',
          200: '#9D9D9D',
          300: '#3E4347',
          400: '#646464',
          
        },
        'mygreen': {
          50: '#048F44',
        }
      },
      opacity: {
        'Opgreen': {
          44: '.44',
        }

      }
    },
  },
  plugins: [],
}

