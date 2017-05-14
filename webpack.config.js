var webpack = require('webpack');


module.exports = {
	
	module: {
        rules: [
    {
        test: /\.css$/,
        use: [
        { loader: 'style-loader' },
        { loader: 'css-loader' },
        ]
    }

    ]
},

};