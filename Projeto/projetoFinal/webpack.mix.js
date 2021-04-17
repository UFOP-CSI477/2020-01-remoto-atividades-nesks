const mix = require('laravel-mix');

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


    mix.styles(['resources/views/jogo/css/styles.css'
], 'public/jogo/css/styles.css')

        .scripts(['resources/views/jogo/js/scripts.js'
        ], 'public/jogo/js/scripts.js')

        .version();
