module.exports = {
  important: '.sp-theme',
  future: {
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true
  },
  purge: {
    content: [
      './*.php',
      'src/**/*.php',
      'includes/**/*.php',
      'views/**/*.blade.php',
      'blocks/**/*.blade.php'
    ]
  },
  theme: {
    extend: {
      colors: {
        primary: 'var(--sp-color-primary)',
        secondary: 'var(--sp-color-secondary)'
      }
    }
  }
}
