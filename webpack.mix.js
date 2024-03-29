var mix = require('laravel-mix');
// mix.setPublicPath('.');

// var spritemap = require('svg-spritemap-webpack-plugin');
// var iconfont = require('iconfont-plugin-webpack');
//
// const ImageminPlugin = require('imagemin-webpack-plugin').default;
// const CopyWebpackPlugin = require('copy-webpack-plugin');
// const imageminMozjpeg = require('imagemin-mozjpeg');

// // Autoload jQuery
// // @see: https://github.com/JeffreyWay/laravel-mix/blob/master/docs/autoloading.md
// mix.autoload({
// 	jquery: ['$', 'window.jQuery']
// });
//
// // Disable Process CSS Urls
// // @see: https://laravel.com/docs/5.7/mix#working-with-stylesheets
// mix.options({
// 	processCssUrls: false
// });

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
mix.js('resources/js/empire.js', 'public/js/evx.js')
	.sass('resources/css/empire.scss', 'public/css/evx.css');

/*
	.sass('typo3conf/ext/empire/Resources/Public/Sass/editor.scss', 'fileadmin/Resources/Public/Css/editor.css')
	.webpackConfig({
		output: {
			publicPath: '/fileadmin/Resources/Public/'
		},

		plugins: [
			new spritemap('typo3conf/ext/empire/Resources/Public/Svg/Sprite/*.svg', {
				output: {
					filename: 'fileadmin/Resources/Public/Svg/sprite.svg',
					svgo: false
				}
			}),

			new iconfont({
				src: './typo3conf/ext/empire/Resources/Public/Svg/Font', // required - directory where your .svg files are located
				family: 'icons', // optional - the `font-family` name. if multiple iconfonts are generated, the dir names will be used.
				dest: {
					font: './fileadmin/Resources/Public/Font/[family].[type]', // required - paths of generated font files
					css: './typo3conf/ext/empire/Resources/Public/Sass/empire/_icons.scss' // required - paths of generated css files
				},
				watch: {
					pattern: './typo3conf/ext/empire/Resources/Public/Svg/Font/*.svg', // required - watch these files to reload
					cwd: undefined // optional - current working dir for watching
				},
			}),

			new CopyWebpackPlugin([{
				from: './typo3conf/ext/empire/Resources/Public/Images',
				to: './fileadmin/Resources/Public/Images', // Laravel mix will place this in 'public/img'
			}]),

			new ImageminPlugin({
				test: /\.(jpe?g|png|gif|svg)$/i,
				plugins: [
					imageminMozjpeg({
						quality: 80,
					})
				]
			})
		]
	});
	*/