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

mix.copyDirectory('resources/assets/css','public/assets/css');
mix.copyDirectory('resources/assets/fonts','public/assets/fonts');
mix.copyDirectory('resources/assets/image','public/assets/image');
mix.copyDirectory('resources/assets/js','public/assets/js');
mix.copyDirectory('resources/assets/lib','public/assets/lib');
