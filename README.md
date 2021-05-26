# Child Theme

A WordPress child theme for developing custom websites. This child theme is used to speed up development and integrates with our [Sitepilot](https://github.com/sitepilot/sitepilot) plugin.

## Usage

1. Create a new composer project `composer create-project sitepilot/child-theme <theme-name>`.
2. Modify `style.css` to your needs.
   - Optional: replace `astra` with another theme if you would like to use another parent theme.
3. Start compiling scripts and stylesheets: `npm run watch`.

_This child theme uses [Laravel Mix](https://laravel-mix.com/) for compiling scripts and styles. More information about configuring and using Laravel Mix can be found [here](https://laravel-mix.com/docs/6.0/installation)._
