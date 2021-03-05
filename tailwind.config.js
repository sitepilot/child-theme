module.exports = {
  important: '.sp-theme-block',
  future: {
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true
  },
  purge: {
    content: [
      '**/*.php',
      '**/*.blade.php',
      './assets/js/*.js',
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
