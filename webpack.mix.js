let mix = require('laravel-mix');

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

const src = 'resources/assets/js/app.js';
const output = 'public/js';

mix.disableSuccessNotifications();

mix
	.js(src, output)
	.extract(['vue', 'axios'])
	.sass('resources/assets/sass/app.scss', 'public/css')
	.sourceMaps();

if (mix.config.production) {
	mix.version();
}

//TODO:: cache vendors
//TODO:: split css
