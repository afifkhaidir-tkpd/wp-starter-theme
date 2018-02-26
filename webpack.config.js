const path = require('path');

const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
  entry: {
    main: './src/js/main.js',
    single: './src/js/single.js'
  },
  plugins: [
    new HtmlWebpackPlugin({
      title: 'Theme Output'
    })
  ],
  output: {
    filename: 'main.min.js',
    path: path.resolve(__dirname, 'dist/js')
  }
};

