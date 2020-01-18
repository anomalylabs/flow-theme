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
    "border-dark":'var(--color-border-dark)',
    // Text Color 
    "text":'var(--color-text)',
    // Text color light 
    "text-light":'var(--color-text-light)',
    // Accent color used for links, action buttons..
    "accent":'var(--color-accent)',
    // Accent hover color
    "accent-hover":'var(--color-accent-hover)',

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
      'xs': 'var(--font-size-xs)',
      'sm': 'var(--font-size-sm)',
      'base': 'var(--font-size-base)',
      'lg': 'var(--font-size-lg)',
      'xl': 'var(--font-size-xl)'
    },
    extend: {}
  },
  variants: {},
  plugins: []
}


