module.exports = {
  important: '.sp-block',
  future: {
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true
  },
  purge: {
    content: [
      './*.php',
      './modules/**/*.php',
      './templates/**/*.php',
      './assets/js/components/*.vue',
      './classes/Blocks/**/views/*.blade.php',
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
          "1": "#4F46E5"
        }
      }
    }
  }
}
