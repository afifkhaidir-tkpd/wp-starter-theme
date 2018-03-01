const path = require('path');
const argv = require('yargs').argv;

const CleanWebpackPlugin = require('clean-webpack-plugin');
const WebpackManifestPlugin = require('webpack-manifest-plugin');

const isProduction = !!((argv.env && argv.env.production) || argv.p);

module.exports = {
  entry: {
    main: './src/js/main.js',
    single: './src/js/single.js'
  },
  devtool: !isProduction ? 'inline-source-map' : undefined,
  devServer: {
    contentBase: './dist'
  },
  module: {
    rules: [
      {
        test: /.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['env']
          }
        }
      },
      {
        test: /.css$/,
        use: [
          {loader: 'style-loader'},
          {loader: 'css-loader'}
        ]
      }
    ]
  },
  plugins: [
    new CleanWebpackPlugin(['dist']),
    new WebpackManifestPlugin()
  ],
  output: {
    filename: '[name].min.js',
    path: path.resolve(__dirname, 'dist')
  }
};
