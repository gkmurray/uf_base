const ExtractTextPlugin = require('extract-text-webpack-plugin');
const webpack = require('webpack');
const autoprefixer = require('autoprefixer');
const path = require('path');

module.exports = {
	context: path.resolve(__dirname, 'src'),
	entry: './index.js',
	output: {
		path: path.resolve(__dirname, 'dist'),
		filename: 'bundle.js',
		sourceMapFilename: 'bundle.js.map'
	},
	module: {
		rules: [{
			test: /\.js$/,
			include: path.resolve(__dirname, 'src'),
			exclude: /node_modules/,
			loader: 'babel-loader'
		}, {
			test: /\.scss$/,
				loader: ExtractTextPlugin.extract({
				use: [{
					loader: 'css-loader?importLoaders=1',
					options: {
						minimize: true
					}
				}, {
					loader: 'postcss-loader',
					options: {
						plugins: function () {
							return [
								require('autoprefixer')
							];
						}
					}
				}, {
					loader: 'sass-loader'
				}],
				// use style-loader in development
				fallback: 'style-loader'
			})
		}]
	},
	externals: {
		// require("jquery") is external and available
		//  on the global var jQuery
		'jquery': 'jQuery',
		foundation: 'Foundation'
	},
	plugins: [
		new webpack.optimize.UglifyJsPlugin(),
		new ExtractTextPlugin({ 
			filename: 'style.css', 
			disable: process.env.NODE_ENV === 'development', 
			allChunks: true })
	]
}