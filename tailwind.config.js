module.exports = {
  important: '.sp-block',
  future: {
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true
  },
  purge: {
    content: [
      './*.php',
      'src/*.php',
      'blocks/*.php'
    ]
  },
  theme: {
    extend: {
      colors: {
        primary: '#1d4ed8',
        secondary: '#2563eb'
      }
    }
  }
}
