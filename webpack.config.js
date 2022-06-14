const path = require('path');

module.exports = {
	mode: process.env.NODE_ENV === 'production' ? 'production' : 'development',
    entry: ['./index.js', './assets/scss/main.scss'],    
    output: {
		path: path.resolve(__dirname, 'assets'),
		filename: 'js/index.js',
	},
	module: {
		rules: [
			{
				test: /\.scss$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: 'css/[name].css',
						}
					},
					{
						loader: 'sass-loader'
					}
				]
			}
		]
	}
};