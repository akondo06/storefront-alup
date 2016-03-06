var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function() {
	return gulp.src('./scss/style.scss')
		// On "compressed" .. the wp comment thingie dissapears ...
		.pipe(sass({outputStyle: 'normal'}).on('error', sass.logError))
		.pipe(gulp.dest('./'));
});

gulp.task('browserSync', function() {
	browserSync.init({
		port: 8888,
		startPath: '/wordpress/'
	});
});

gulp.task('watch', ['browserSync', 'sass'], function() {
	gulp.watch('scss/**/*.scss', ['sass']);
	gulp.watch('scss/**/*.scss', browserSync.reload);
	gulp.watch('*.php', browserSync.reload);
	gulp.watch('js/**/*.js', browserSync.reload);
});
