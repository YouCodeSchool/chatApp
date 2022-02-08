module.exports = {
  content: [ 
    './views/*.{html,css,js,php}',
    './controllers/*.{html,css,js,php}',
  ],
  theme: {
    extend: {
    fontFamily: {
        'openSans':  'Open Sans',
        'poppinsSans':  'Poppins',
      },
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
      }
    },
  },
  variants: {
    display: ['active'],
  },
  plugins: [
    require('tailwind-scrollbar'),
  ],

}
