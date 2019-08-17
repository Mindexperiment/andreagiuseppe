const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
 theme: {
  extend: {
   fontFamily: {
    serif: [
     "Tiempos",
     ...defaultTheme.fontFamily.serif
    ],
    brand: [
     "EncodeSans",
     ...defaultTheme.fontFamily.sans
    ]
   },
   colors: {
    agp: {
     'white': '#fdfdfd',
     'dark': '#0d2d2c',
     'grey': '#afa9a9',
     'green': '#124e4c',
     'yellow': '#ecdc49',
     'red': '#ee5545'
    }
   }
  }
 },
 variants: {},
 plugins: []
}
