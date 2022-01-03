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

mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css','resources/assets/css/bootstrap.min.css');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js','resources/assets/js/bootstrap.min.js');
mix.copy('node_modules/jquery/dist/jquery.js','resources/assets/js/jquery.min.js');
mix.copy('node_modules/sweetalert/dist/sweetalert.min.js','resources/assets/js/sweetalert.min.js');

mix.styles([
	'resources/assets/css/bootstrap.min.css',
	
	'resources/assets/css/style.css'
	],'public/css/all.css');

mix.scripts([
	'resources/assets/js/jquery.min.js',
	'resources/assets/js/bootstrap.min.js',
	'resources/assets/js/sweetalert.min.js',
	'resources/assets/admin/ace-elements.min.js',
	'resources/assets/admin/ace-extra.min.js',
	'resources/assets/admin/ace.min.js',
	'resources/assets/typeahead-bs2.min.js',
	'resources/assets/js/custom.js'
	],'public/js/all.js');
mix.styles([
	'resources/assets/admin/bootstrap.min.css',
	'resources/assets/admin/ace.min.css',
	'resources/assets/admin/ace-rtl.min.css',
	'resources/assets/admin/ace-fonts.css',
	'resources/assets/admin/ace-skins.min.css',
	'resources/assets/admin/font-awesome.min.css',
	],'public/css/admin.css');

