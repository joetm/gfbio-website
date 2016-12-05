var path = require('path'),
    ProvidePlugin = new require('webpack/lib/ProvidePlugin'),
    CommonsPlugin = new require('webpack/lib/optimize/CommonsChunkPlugin'),
    ExtractTextPlugin = require("extract-text-webpack-plugin"),
    CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
    entry: {
        // libs - see also CommonsPlugin
        vendor: "./gfbio/libs.js",
        // home page
        home: "./gfbio/home.js",
        // api page
        // api: "./gfbio/api.js",
        // vendor: [
        //     "jquery",
        //     "materialize-css/dist/js/materialize.min.js",
        //     "jquery-match-height/dist/jquery.matchHeight-min.js"
        // ],
        // main app
        app: './gfbio/main.js'
    },
    output: {
        path: path.resolve(__dirname, './wordpress/dist'),
        // pathinfo: true,
        publicPath: '/dist/',
        filename: '[name].js',
        sourceMapFilename: '[file]-[id].map'
    },
    // externals: {
    //     // require("jquery") is external and available
    //     //  on the global var jQuery
    //     "jquery": "jQuery",
    //     "jquery": "$"
    // }
    resolveLoader: {
        root: path.join(__dirname, 'node_modules'),
    },
    resolve: {
        alias: {
            jquery: path.resolve(__dirname, './node_modules/jquery/dist/jquery.min.js')
        }
    },
    module: {
        loaders: [
            {
                test: /\.scss$/,
                loader: ExtractTextPlugin.extract("style-loader", "css-loader!sass-loader")
            },
            {
                test: /\.css/,
                loader: ExtractTextPlugin.extract("style-loader", "css-loader")
            },
            {
                test: /\.jsx?$/,
                loader: 'babel?presets[]=es2015',
                include: path.resolve(__dirname, 'gfbio'),
                exclude: /node_modules/
            },
            {
                test: /\.json$/,
                loader: 'json'
            },
            {
                test: /\.(png|jpg|gif|jpeg|eot|svg|ttf|woff|woff2)$/,
                loader: "file-loader"
            }
            // {
            //     test: /\.(png|jpg|gif)$/,
            //     loader: 'url',
            //     query: {
            //         limit: 1000,
            //         name: 'images/[name].[ext]?[hash]'
            //     }
            // },
        ]
    },
    plugins: [
        // new ProvidePlugin({
        //     $: "jquery",
        //     jQuery: "jquery",
        //     "window.jQuery": "jquery"
        // }),
        new ExtractTextPlugin("styles.css", {
            allChunks: true
        }),
        new CommonsPlugin({
            name: 'vendor',
            minChunks: Infinity,
            filename: "libs.js"
        })
    ],
    build: {
        assetsPublicPath: '/',
        assetsSubDirectory: 'static'
    }
}

if (process.env.NODE_ENV === 'production') {

  // http://vuejs.github.io/vue-loader/workflow/production.html
  module.exports.plugins = (module.exports.plugins || []).concat([

    new webpack.DefinePlugin({
      'process.env': {
        NODE_ENV: '"production"'
      }
    }),
    new webpack.optimize.UglifyJsPlugin({
      compress: {
        warnings: false
      }
    }),
    new webpack.optimize.OccurenceOrderPlugin(),
    new CopyWebpackPlugin([
      // {from: './gfbio/print.css', to: './dist/print.css'},
      {from: './gfbio/swagger', to: './dist/swagger'}
    ])
  ]);

} else {

  // dev env only

  module.exports.devtool = '#source-map';
  //  devtool: '#eval-source-map',

  module.exports.devServer = {
        historyApiFallback: true,
        noInfo: true
  };

}
