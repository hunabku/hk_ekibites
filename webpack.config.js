
const path = require('path');
var dotenv = require('dotenv').config({path: __dirname + '/.env'});

let webpack = require("webpack");

const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserJSPlugin = require('terser-webpack-plugin');
const CssMinimizerWebpackPlugin = require('css-minimizer-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const Autoprefixer = require('autoprefixer');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const context = __dirname + '/';
const outputFolder = 'public';
const proxyTarget = dotenv.parsed.APP_URL;

const node_env = process.env.NODE_ENV;

module.exports = () => {
    const devMode = node_env == 'production';
    return {
        mode: devMode == true ? 'production' : 'development',
        //stats: 'minimal', //https://webpack.js.org/configuration/stats/
        context: path.resolve(context),
        entry: {
            //plugins: path.resolve(__dirname, './resources/js/plugins.js'),
            app: path.resolve(__dirname, './resources/js/app.js'),
        },
        output: {
            path: path.resolve(outputFolder),
            publicPath: '../',
            filename: './js/[name].js'
        },
        module: {
            rules: [
                {
                    test: /\.m?js$/,
                    exclude: /(node_modules|bower_components)/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    }
                },
                {
                    test: /\.(sa|sc|c)ss$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        {
                            loader: 'css-loader',
                            options: { 
                                url: false, 
                            }
                        },
                        {
                            loader: 'postcss-loader', // Run postcss actions
                            options: {}
                        },
                        {
                            loader: 'sass-loader',
                            options: {
                                sourceMap: true,
                                implementation: require("sass"),
                            }
                            
                        },
                    ],
                    
                },
            ]
        },
        optimization: {
          minimizer: [
              new TerserJSPlugin({}),
              new CssMinimizerWebpackPlugin({})
          ],
        },
        plugins: [
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery"
            }),
            // new CleanWebpackPlugin({
            //   cleanOnceBeforeBuildPatterns: ['./images/*']
            // }),
            new MiniCssExtractPlugin({
                filename: './css/[name].css',
                chunkFilename: './css/[id].css',
            }),
            new BrowserSyncPlugin({
                host: 'localhost',
                port: 3000,
                open: true,
                proxy: proxyTarget,
                browser: 'Google chrome',
                files: [
                    'public/css/**/*.css',
                    'public/js/**/*.js',
                    'resources/views/**/*.php',
                ]
            },{
                // prevent BrowserSync from reloading the page
                // and let Webpack Dev Server take care of this
                reload: false
            })
        ],
    }
}
