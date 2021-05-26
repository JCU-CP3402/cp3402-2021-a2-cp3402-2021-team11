const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const postcssPresetEnv = require('postcss-preset-env');
const cssnano = require('cssnano')
const ProgressBarWebpackPlugin = require('progress-bar-webpack-plugin')
const postcssImport = require('postcss-import')

const devMode = process.env.NODE_ENV !== 'prod';

module.exports = {
    watch: devMode,
    entry: './sass/style.scss',

    output: {
        filename: "dist/dev/style.css.js",
        path: path.resolve(__dirname),
    },


    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            modules: true,
                            importLoaders: 1,
                        },
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            sourceMap: true,
                            postcssOptions: {
                                plugins: () => [postcssImport, postcssPresetEnv, cssnano],
                            },
                        },
                    },
                ],
            },
            // Use a list of loaders to load scss files
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            importLoaders: 2,
                        },
                    },
                    {
                        loader: 'postcss-loader',
                        options: {
                            sourceMap: true,
                            postcssOptions: {
                                plugins: () => [postcssImport, postcssPresetEnv, cssnano],
                            },
                        },
                    },
                    { loader: 'sass-loader', options: { sourceMap: true } },
                ],
            },
            {
                test: /\.(png|jpe?g|gif)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]',
                            publicPath: 'dist/images',
                            emitFile: false
                        }
                    }
                ]
            }
        ]
    },

    plugins: [
        new MiniCssExtractPlugin({
            filename: 'style.css'
        }),
        new ProgressBarWebpackPlugin(),
    ],
    resolve: {
        modules: ['node_modules', 'src'],
        extensions: ['.js', '.json', '.css', '.scss'],
    }
};