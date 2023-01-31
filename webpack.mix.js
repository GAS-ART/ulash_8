const mix = require('laravel-mix');

//require('laravel-mix-webp');

mix.browserSync({
    proxy: 'http://127.0.0.1:8000'
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/style.scss', 'public/css', [])
    /* .ImageWebp({
        from: 'public/img/home',
        to: 'public/img/home',
        imageminWebpOptions: {
            quality: 75
        },
    }) */;
