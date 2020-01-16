module.exports = {
  theme: {
    colors: {
      background:'var(--color-modest)',
      primary: 'var(--color-primary)',
      secondary: 'var(--color-secondary)',
      white:'#fff',
      black:'#000',
      blue:{
        100:'var(--color-blue-100)',
        200:'var(--color-blue-200)',
        300:'var(--color-blue-300)',
        400:'var(--color-blue-400)',
        500:'var(--color-blue-500)',
        600:'var(--color-blue-600)',
        700:'var(--color-blue-700)',
        800:'var(--color-blue-800)',
        900:'var(--color-blue-900)'
      }
    },
    borderColor: theme => ({
      ...theme('colors'),
      default: theme('colors.blue.100', 'currentColor'),
    }),
    fontFamily: {
      display: ['JetBrains Mono', 'sans-serif'],
      body: ['JetBrains Mono', 'sans-serif'],
    },
    extend: {}
  },
  variants: {},
  plugins: []
}


