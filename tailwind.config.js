/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
  darkMode: null,
  content: ["./**/*.php"],
  theme: {
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
    extend: {
        fontFamily: {
            'khula': ['Khula', 'sans-serif'],
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            blue: '#003878',
            creamy: '#F5F9FF',
            orange: '#F15842',
        }
    },
  },
  plugins: [],
}
