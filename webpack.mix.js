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

mix.browserSync('localhost')
    .js('resources/js/*.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/site.scss', 'public/css')
    .options({
        purifyCss: false,
        clearConsole: false,
        postCss: [require('postcss')()]
   });

