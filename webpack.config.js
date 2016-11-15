var path = require('path'),
    CommonsPlugin = new require('webpack/lib/optimize/CommonsChunkPlugin'),
    ProvidePlugin = new require('webpack/lib/ProvidePlugin');

var TPL_DIR = path.resolve(__dirname, './wordpress/wp-content/themes/gfbio'),
    WEBROOT = path.resolve(__dirname, './wordpress'),
    APPROOT = path.resolve(__dirname, './gfbio');

module.exports = {
    entry: {
        main: path.join(APPROOT, 'main.js')
        // common: ['jquery', CSSROOT + '/bootstrap/js/bootstrap.js']
    },
    output: {
        path: path.join(__dirname, 'static'),
        publicPath: '/static/',
        filename: '[name].js'
    },
    // resolve: {
    //     alias: {
    //         bootstrap: '../../bootstrap/js/bootstrap'
    //     }
    // },
    plugins: [
        // new CommonsPlugin({
        //   minChunks: 3,
        //   name: 'common'
        // }),
        new ProvidePlugin({
           $: 'jquery',
           jQuery: 'jquery'
        })
    ],
    module: {
        loaders: [
            {
                test: /\.scss$/,
                loaders: ["style", "css", "sass"]
            },
            {
                test: /\.css/,
                loaders: ["style", "css"]
            },
            {
                test: /\.(png|jpg|gif|jpeg|eot|svg|ttf|woff|woff2)$/,
                loader: "file-loader"
            },
            {
                test : /\.jsx?$/,
                include : APPROOT,
                exclude: /(node_modules|bower_components)/,
                loader : 'babel?presets[]=es2015'
            }
        ]
    }
};
