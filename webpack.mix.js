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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.styles([
    'resources/css/bootstrap/bootstrap.min.css',
    'resources/fontawesome/css/all.min.css',
    'resources/css/animate.min.css',
    'resources/css/grid.css',
    'resources/css/style.css',
],'public/css/main.css');

mix.js([
    'resources/js/jquery-3.5.1.min.js',
    'resources/js/popper.js',
    'resources/js/bootstrap/bootstrap.min.js',
    'resources/js/grid.js'
],'public/js/main.js');

mix.copyDirectory('resources/fonts','public/css/fonts');
mix.copyDirectory('resources/images','public/images');


mix.webpackConfig({ stats: { children: true, }, });
