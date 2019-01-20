const { mix }           = require('laravel-mix');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminPlugin    = require('imagemin-webpack-plugin').default;
const ImageminJpegoptim = require('imagemin-jpegoptim');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/noscript.scss', 'public/css')
    .version();

mix.webpackConfig({
    plugins: [
        new CopyWebpackPlugin([{
            context: 'resources/assets/images',
            from: '**/*',
            to: 'images'
        }]),
        new ImageminPlugin([{
            test: /\.(jpe?g|png|gif|svg)$/i,
            gifsicle: {
                interlaced: true
            },
            optipng: {
                optimizationLevel: 5
            },
            svgo: {
                plugins: [
                    {
                        cleanupIDs: false,
                        removeEmptyAttrs: false,
                        removeViewBox: false
                    }
                ]
            },
            jpegtran: null,
            plugins: [
                ImageminJpegoptim({
                    max: 85,
                    progressive: true
                })
            ]
        }])
    ]
});
