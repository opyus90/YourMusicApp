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

mix.js('resources/js/main-app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/main-news.js', 'public/js')
    .sass('resources/sass/news.scss', 'public/css');
mix.js('resources/js/main-contact.js', 'public/js')
    .sass('resources/sass/contact.scss', 'public/css');
mix.js('resources/js/main-artists.js', 'public/js')
    .sass('resources/sass/artists.scss', 'public/css');
mix.js('resources/js/main-artist.js', 'public/js')
    .sass('resources/sass/artist.scss', 'public/css');
mix.js('resources/js/main-albums.js', 'public/js')
    .sass('resources/sass/albums.scss', 'public/css');
mix.js('resources/js/main-album.js', 'public/js')
    .sass('resources/sass/album.scss', 'public/css');
