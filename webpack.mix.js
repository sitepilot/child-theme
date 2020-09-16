const mix = require('laravel-mix');

mix.js('assets/js/theme.js', 'assets/dist/js')
    .sass('assets/scss/theme.scss', 'assets/dist/css').options({
        processCssUrls: false
    })
    .setPublicPath('assets/dist')
    .webpackConfig({
        externals: {
            "jquery": "jQuery"
        }
    });