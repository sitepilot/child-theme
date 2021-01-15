module.exports = {
  important: '.sp-block',
  future: {
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true
  },
  purge: {
    content: [
      './*.php',
      './views/*.php',
      './templates/*.php',
      './blocks/**/views/*.blade.php'
    ]
  },
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '992px',
      xl: '1140px'
    },
    extend: {
      colors: {
        primary: 'var(--sp-color-primary)',
        secondary: 'var(--sp-color-secondary)'
      }
    }
  }
}
