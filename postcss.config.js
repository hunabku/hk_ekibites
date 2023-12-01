// It is handy to not have those transformations while we developing
const devMode = process.env.NODE_ENV == 'production';

module.exports = ()=> ({
	plugins: {
		'autoprefixer': {},
		'postcss-preset-env': { browsers: 'last 2 versions' },
	}
});