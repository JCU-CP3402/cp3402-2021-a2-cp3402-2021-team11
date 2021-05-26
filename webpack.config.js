const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const postcssPresetEnv = require('postcss-preset-env');
const cssnano = require('cssnano')
const ProgressBarWebpackPlugin = require('progress-bar-webpack-plugin')
const postcssImport = require('postcss-import');
const loader = require('sass-loader');

const devMode = process.env.NODE_ENV !== 'prod';

module.exports = {
    watch: devMode,
    entry: [
        './sass/style.scss',
        './src/index.js'
    ],

    output: {
        filename: "dist/dev/app.js",
        path: path.resolve(__dirname),
    },


    module: {
        rules: [
            // Use babel-loader for ts(x) files
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {
                            cacheDirectory: true,
                        },
                    },
                ],
            },
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
                test: /\.(png|jpe?g|gif|svg|webp|tiff)(\?.*)?$/,
                use: [
                    {
                        loader: 'url-loader',
                        options: { limit: 10000, name: '[name].[ext]' },
                    },
                    { loader: 'image-webpack-loader', options: { disable: devMode } },
                ],
            },
            // Use url-loader to load font related files
            {
                test: /\.(woff2?|eot|ttf|otf)(\?.*)?$/,
                use: [
                    {
                        loader: 'url-loader',
                        options: { limit: 10000, name: '[name].[ext]' },
                    },
                ],
            },
            // Use url-loader to load audio related files
            {
                test: /\.(mp4|webm|ogg|mp3|wav|flac|aac)(\?.*)?$/,
                use: [
                    {
                        loader: 'url-loader',
                        options: { limit: 10000, name: '[name].[ext]' },
                    },
                ],
            },
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