module.exports = {
  theme: {
    colors: {

    // Black
    "black": 'var(--color-black)',
    // White
    "white": 'var(--color-white)',
    // Color for background 
    "background":'var(--color-background)',
    // Color for surfaces
    "surface":'var(--color-surface)',
    // Darker color than the surface for elements placed on it, textarea ie.
    "surface-dark-light":'var(--color-surface-dark-light)',
    // Border around element with background surface dark
    "surface-dark":'var(--color-surface-dark)',
    // Border color - Also used for secondary buttins
    "border":'var(--color-border)',
    // Darker border - used ie input elements
    "border-darker":'var(--color-border-darker)',
    // Text Color 
    "text":'var(--color-text)',
    // Accent color used for links, action buttons..
    "accent":'var(--color-accent)',
    // Accent hover color
    "accent-hover":'var(--color-accent-hover)',

      




      // Color for the background
      //--color-background:#000;

      // "primary":"var(--color-primary)",
      // "primary:hover":"var(--color-primary-hover)",
      // "primary:active":"var(--color-primary-active)",

      // form:{
      //   'border':'var(--color-primary)',
      //   "border:hover":'var(-color-primary-hover)',
      //   "border:focus":'var(--color-primary-active)',
      // },
      
      
      

      
    

    },
    borderColor: theme => ({
      ...theme('colors'),
      default: theme('colors.border', 'currentColor'),
    }),
    fontFamily: {
      display: ['Inter', 'sans-serif'],
      body: ['Inter', 'sans-serif'],
      mono: ['JetBrains Mono']
    },
    fontSize: {
      'sm': 'var(--font-size-small)',
      'base': 'var(--font-size-base)',
      'large': 'var(--font-size-large)'
    },
    extend: {}
  },
  variants: {},
  plugins: []
}


