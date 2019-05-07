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

/*mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
*/

mix.styles([

	'resources/bootstrap/css/bootstrap.min.css',
	'resources/css/master.css',
	'resources/css/contact.css',
	'resources/css/gallery.css',
	'resources/css/services.css',
	'resources/css/about.css',
	'resources/css/index.css',
	],'public/css/master.css');

mix.scripts([

	'resources/js/jquery.js',
	'resources/bootstrap/js/bootstrap.min.js',
	'resources/js/custom/main.js',
	],'public/js/master.js');