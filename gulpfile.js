//Include gulp
var gulp = require('gulp');

//defs
var sassPaths = [
	'src/sass',
	'bower_components/foundation-sites/scss',
	'bower_components/motion-ui/src'
];

//Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');

//Compile and minify SASS
gulp.task('sass', function() {
	return gulp.src('src/sass/style.scss')
		.pipe(sass({
			includePaths: sassPaths,
			outputStyle: 'compressed' // if css compressed **file size**
			
		}))
		.pipe(prefix({
		  browsers: ['last 2 versions', 'ie >= 9', 'and_chr >= 2.3']
		}))
		.pipe(gulp.dest('./'));
});

//Concatenate all JS files, then minify
gulp.task('scripts', function() {
	return gulp.src('src/js/*.js')
		.pipe(concat('main.js'))
			.pipe(rename({suffix: '.min'}))
			.pipe(uglify())
			.pipe(gulp.dest('dist/js'));
});

//Default Task
gulp.task('default', ['sass', 'scripts']);