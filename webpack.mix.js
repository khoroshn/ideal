let mix = require('laravel-mix');
var path = require("path");

if (process.env.npm_lifecycle_event !== 'hot') {
    mix.version()
}

const CompressionPlugin = require("compression-webpack-plugin");
//const UglifyJsPlugin = require('uglifyjs-webpack-plugin')

mix.react('resources/assets/js/index.js', 'public/js')
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
            })
        ]
    });