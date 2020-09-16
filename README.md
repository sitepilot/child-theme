# Child Theme

A WordPress child theme for developing custom websites. This child theme is used to speed up development and is compatible with [Astra](https://wpastra.com/) and [Beaver Builder Theme](https://www.wpbeaverbuilder.com/wordpress-framework-theme/).

[🚀 Download the latest version here.](https://github.com/sitepilot/child-theme/releases)

## Usage

1. Clone this repository (replace `theme-name` with the desired theme name): `git clone https://github.com/sitepilot/child-theme.git theme-name && rm -rf theme-name/.git`.
2. Modify `style.css` to your needs.
   - Optional: replace `bb-theme` with `astra` if you would like to use Astra.
3. Install composer packages: `composer install`.
4. Install node modules: `npm install`.
5. Start compiling scripts and stylesheets: `npm run watch`.

_This child theme uses [Laravel Mix](https://laravel-mix.com/) for compiling Sass / Javascript. More information about configuring and using Laravel Mix can be found [here](https://laravel-mix.com/docs/5.0/installation)._
