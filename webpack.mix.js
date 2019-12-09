const mix = require('laravel-mix');

require('laravel-mix-imagemin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps. 
 | By default, we are compiling the Sass file for this theme
 | as well as bundling up all the JS files.
 |
 */

mix.js('assets/js/theme.js', 'assets/dist/js')
    .sass('assets/scss/theme.scss', 'assets/dist/css')
    .imagemin(
        'img/**.*',
        {
            context: 'assets/'
        }
    )
    .setPublicPath('assets/dist')
    .browserSync({
        ui: false,
        proxy: 'https://sandbox.dev.sitepilot.io',
        files: [
            "*.php",
            "**/*.php",
            "assets/dist/css/*.css",
            "assets/dist/css/*.js",
            "assets/dist/img/*.*"
        ]
    });