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
mix.copyDirectory('resources/images', 'public/images');
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/jquery/jquery.slides.js', 'public/js')
    .js('resources/js/shoppica.products_slide.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/app.css', 'public/css')
    .css('resources/css/color.css', 'public/css')
    .css('resources/css/ie.css', 'public/css')
    .css('resources/css/960.css', 'public/css')
    .css('resources/css/screen.css', 'public/css')
    .css('resources/css/prettyPhoto.css', 'public/css')
