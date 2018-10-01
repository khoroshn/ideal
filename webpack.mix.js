let mix = require('laravel-mix');
var path = require("path");

/*if (process.env.npm_lifecycle_event !== 'hot') {
    mix.version()
}
*/




//onst CompressionPlugin = require("compression-webpack-plugin");
//const SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');

//const workboxPlugin = require('workbox-webpack-plugin');
//const UglifyJsPlugin = require('uglifyjs-webpack-plugin')

// if (mix.inProduction()) {
//     mix.webpackConfig({
//         plugins: [
//             new workboxPlugin.InjectManifest({
//                 swSrc: 'public/sw-offline.js', // more control over the caching
//                 swDest: 'sw.js', // the service-worker file name
//                 importsDirectory: 'service-worker' // have a dedicated folder for sw files
//             })
//         ]
//     })
// }


mix.react('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
                'resources/dist/css/*.css',
                'resources/dist/fonts/hkgrotesk/*.css',
                'resources/dist/vendor/ekko-lightbox/*.css',
                'resources/dist/vendor/nouislider/*.css',
                'resources/dist/vendor/owl.carousel/assets/*.css',
                'resources/dist/vendor/prismjs/themes/*.css'
            ], 
        'public/sell/build/css/all.css')
    .scripts([
                'resources/dist/vendor/jquery/*.js',
                'resources/dist/vendor/bootstrap/js/*.js',
                'resources/dist/vendor/popper.js/umd/*.js',
                'resources/dist/vendor/ekko-lightbox/*.js',
                'resources/dist/vendor/jquery.cookie/*.js',
                'resources/dist/vendor/nouislider/*.js',
                'resources/dist/vendor/owl.carousel/*.js',
                'resources/dist/vendor/owl.carousel2.thumbs/*.js',
                'resources/dist/vendor/prismjs/plugins/normalize-whitespace/*.js',
                'resources/dist/vendor/prismjs/*.js',
                'resources/dist/vendor/normalize-whitespace/*.js',
                'resources/dist/vendor/smooth-scroll/*.js',
                'resources/dist/js/*.js'
            ], 
        'public/sell/build/js/all.js')
    .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.less$/,
                    exclude: /node_modules/,
                    use: [
                        'less-loader'
                    ]
                },
                {
                    test: /\.sass$/,
                    exclude: /node_modules/,
                    use: [
                        'style-loader',
                        'css-loader',
                        'resolve-url',
                        'sass-loader'
                    ]
                },
                {
                    test: /\.(js|jsx)$/,
                    exclude: /(node_modules|bower_components)/,
                    use: [
                        'babel-loader'
                    ]

                }
            ]
        }

    });


            // new SWPrecacheWebpackPlugin({
            //     cacheId: 'pwa',
            //     filename: 'service-worker.js',
            //     staticFileGlobs: ['public/**/*.{css,eot,svg,ttf,woff,woff2,js,html}'],
            //     minify: true,
            //     stripPrefix: 'public/',
            //     handleFetch: true,
            //     dynamicUrlToDependencies: {
            //         '/': ['resources/views/welcome.blade.php']
            //     },
            //     staticFileGlobsIgnorePatterns: [/\.map$/, /mix-manifest\.json$/, /manifest\.json$/, /service-worker\.js$/],
            //     runtimeCaching: [
            //         {
            //             urlPattern: /^https:\/\/fonts\.googleapis\.com\//,
            //             handler: 'cacheFirst'
            //         },
            //         {
            //             urlPattern: /^https:\/\/www\.thecocktaildb\.com\/images\/media\/drink\/(\w+)\.jpg/,
            //             handler: 'cacheFirst'
            //         }
            //     ],
            //     importScripts: ['./js/push_message.js']
            // })