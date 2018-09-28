let mix = require('laravel-mix');
var path = require("path");

if (process.env.npm_lifecycle_event !== 'hot') {
    mix.version()
}





const CompressionPlugin = require("compression-webpack-plugin");
const SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');

const workboxPlugin = require('workbox-webpack-plugin');
//const UglifyJsPlugin = require('uglifyjs-webpack-plugin')

if (mix.inProduction()) {
    mix.webpackConfig({
        plugins: [
            new workboxPlugin.InjectManifest({
                swSrc: 'public/sw-offline.js', // more control over the caching
                swDest: 'sw.js', // the service-worker file name
                importsDirectory: 'service-worker' // have a dedicated folder for sw files
            })
        ]
    })
}


mix.react('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .webpackConfig({
        'output': {
            'publicPath': "https://ideal.loc/"
        },
        'devServer': {
            historyApiFallback: true,
            'contentBase': path.join(__dirname, 'public'),
            'hot': true,
            'inline': true,
            'https': true,
            'port': 8181,
            'compress': false,
            'disableHostCheck': true, 
            'headers': { "Access-Control-Allow-Origin": "*" },
            'watchOptions': {
                'exclude': [/bower_components/, /node_modules/]
            }
        },
        'node': {

            'fs': "empty",

            'module': "empty"

        },
        'devtool': "source-map",
        "module": {
            "rules": [
                {
                    "test": /\.js?$/,
                    "exclude": /node_modules/,
                    "use": {
                        "loader": "babel-loader",
                        "options": {
                            "presets": [
                                'es2015',
                                'react'
                            ],
                            "plugins": [
                                'transform-decorators-legacy',
                                'transform-class-properties',
                                "transform-object-rest-spread"
                            ]
                        }
                    }
                },
                {
                    "test": /\.jsx?$/,
                    "exclude": /node_modules/,
                    "use": {
                        "loader": "babel-loader",
                        "options": {
                            "presets": [
                                'es2015',
                                'react',
                                "stage-3"
                            ],
                            "plugins": [
                                'transform-class-properties',
                                'transform-react-jsx',
                                'transform-object-rest-spread',
                                "react-hot-loader/babel"
                            ]
                        }
                    }
                },
                {
                    "test": /\.less$/,
                    "exclude": /node_modules/,
                    "use": [
                        "less-loader"
                    ]
                },
                {
                    "test": /\.sass$/,
                    "exclude": /node_modules/,
                    "use": [
                        'style-loader',
                        'css-loader',
                        'resolve-url',
                        "sass-loader"
                    ]
                },
                {
                    "test": /\.css$/,
                    "exclude": /node_modules/,
                    'use': [
                        {
                            loader: 'css-loader',
                            'options': {
                                'minimize': true
                            }
                        }
                    ]
                }
            ]
        },
        'plugins': [
            new CompressionPlugin({
                'asset': "[path].gz[query]",
                'algorithm': "gzip",
                'test': /\.js$|\.css$|\.html$/,
                'threshold': 10240,
                'minRatio': 0.8
            }),
            new SWPrecacheWebpackPlugin({
		        cacheId: 'pwa',
		        filename: 'service-worker.js',
		        staticFileGlobs: ['public/**/*.{css,eot,svg,ttf,woff,woff2,js,html}'],
		        minify: true,
		        stripPrefix: 'public/',
		        handleFetch: true,
		        dynamicUrlToDependencies: {
		            '/': ['resources/views/welcome.blade.php']
		        },
		        staticFileGlobsIgnorePatterns: [/\.map$/, /mix-manifest\.json$/, /manifest\.json$/, /service-worker\.js$/],
		        runtimeCaching: [
		            {
		                urlPattern: /^https:\/\/fonts\.googleapis\.com\//,
		                handler: 'cacheFirst'
		            },
		            {
		                urlPattern: /^https:\/\/www\.thecocktaildb\.com\/images\/media\/drink\/(\w+)\.jpg/,
		                handler: 'cacheFirst'
		            }
		        ],
		        importScripts: ['./js/push_message.js']
		    })
        ]
    });