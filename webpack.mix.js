const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('assets/js/theme.js', 'assets/dist/js')
    .sass('assets/scss/theme.scss', 'assets/dist/css').options({
        processCssUrls: false
    })
    .sass('assets/scss/block.scss', 'assets/dist/css').options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')]
    })
    .setPublicPath('assets/dist')
    .webpackConfig({
        externals: {
            "jquery": "jQuery"
        }
    });
