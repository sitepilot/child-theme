module.exports = {
  important: '.sp-module',
  future: {
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true
  },
  purge: {
    content: [
      './*.php',
      './modules/**/*.php',
      './templates/**/*.php',
      './views/**/*.blade.php',
      './assets/js/components/*.vue'
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
        theme: {
          // 
        }
      }
    }
  }
}
