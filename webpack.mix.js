const mix = require('laravel-mix');

mix.js('assets/js/theme.js', 'assets/dist/js')
    .postCss('assets/css/theme.css', 'assets/dist/css', [
        require('tailwindcss'),
        require('postcss-nested')
    ])
    .webpackConfig({
        externals: {
            "jquery": "jQuery"
        }
    });
