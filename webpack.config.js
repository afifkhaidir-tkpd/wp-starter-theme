const path = require('path');

const CleanWebpackPlugin = require('clean-webpack-plugin');

module.exports = {
  entry: {
    main: './src/js/main.js',
    single: './src/js/single.js'
  },
  plugins: [
    new CleanWebpackPlugin(['dist'])
  ],
  output: {
    filename: '[name].min.js',
    path: path.resolve(__dirname, 'dist/js')
  }
};

