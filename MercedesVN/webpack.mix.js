const mix = require('laravel-mix');

mix.copy('resources/css/layout.css', 'public/css');

mix.js('resources/js/example.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');