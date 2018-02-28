const path = require('path');
const argv = require('yargs').argv;

const CleanWebpackPlugin = require('clean-webpack-plugin');
const WebpackManifestPlugin = require('webpack-manifest-plugin');

const isProduction = !!((process.env.NODE_ENV && process.env.NODE_ENV.production) || argv.production);

console.log(isProduction);

if(process.env.NODE_ENV === undefined) {
  process.env.NODE_ENV = isProduction ? 'production' : 'development';
}

module.exports = {
  entry: {
    main: './src/js/main.js',
    single: './src/js/single.js'
  },
  devtool: !isProduction ? 'inline-source-map' : undefined,
  plugins: [
    new CleanWebpackPlugin(['dist']),
    new WebpackManifestPlugin()
  ],
  output: {
    filename: '[name].min.js',
    path: path.resolve(__dirname, 'dist')
  }
};
