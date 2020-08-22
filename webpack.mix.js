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

mix.js('resources/js/app.js', 'public/js').sourceMaps()
    .js('resources/js/custom.js', 'public/js').sourceMaps()
    .js('node_modules/jquery/dist/jquery.min.js', 'public/js').sourceMaps()
    .sass('resources/sass/app.scss', 'public/css').sourceMaps()
    .copy('node_modules/bootstrap-icons/bootstrap-icons.svg', 'public/icons');
