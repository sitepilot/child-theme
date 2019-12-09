const mix = require('laravel-mix');

require('laravel-mix-imagemin');

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
    })
    .webpackConfig({
        externals: {
            "jquery": "jQuery"
        }
    });