const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')

  .sass('resources/sass/abstract/_mixins.scss', 'public/css')
  .sass('resources/sass/abstract/_variables.scss', 'public/css')

  .sass('resources/sass/base/_base.scss', 'public/css')
  .sass('resources/sass/base/_typography.scss', 'public/css')
  .sass('resources/sass/base/_utils.scss', 'public/css')

  .sass('resources/sass/components/_button.scss', 'public/css')
  .sass('resources/sass/components/_card.scss', 'public/css')

  .sass('resources/sass/layout/_footer.scss', 'public/css')
  .sass('resources/sass/layout/_grid.scss', 'public/css')
  .sass('resources/sass/layout/_header.scss', 'public/css')

  .sass('resources/sass/pages/_landing-page.scss', 'public/css');
