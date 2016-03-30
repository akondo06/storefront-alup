var gulp = require('gulp');
var util = require('gulp-util');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function() {
	return gulp.src('./scss/style.scss')
		// On "compressed" .. the wp comment thingie dissapears ...
		.pipe(sass({outputStyle: 'normal'}).on('error', sass.logError))
		.pipe(gulp.dest('./'));
});

var filesToMove = ['../storefront/fonts/**/*', '../storefront/images/**/*.*'];
gulp.task('move', function() {
	return gulp
		.src(filesToMove, { base: '../storefront/' })
		.pipe(gulp.dest('./'));
});

gulp.task('browserSync', function() {
	browserSync.init({
		port: 8890,
		startPath: '/wordpress/'
	});
});

gulp.task('watch', ['browserSync', 'sass', 'move'], function() {
	gulp.watch('scss/**/*.scss', ['sass']);
	gulp.watch('scss/**/*.scss', browserSync.reload);
	gulp.watch('*.php', browserSync.reload);
	gulp.watch('js/**/*.js', browserSync.reload);

	// doing nothing for some reason
	// gulp.watch(filesToMove, ['move']);
	// gulp.watch(filesToMove, browserSync.reload);
});
