var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('vendor-scripts', function () {
    return gulp
        .src([
            'bower_components/vue/dist/vue.js',
            'bower_components/axios/dist/axios.js'
        ])
        .pipe(gulp.dest(('dist/js/vendor')));
});

gulp.task('scripts', function () {
    return gulp
        .src('resources/js/*.js')
        .pipe(gulp.dest(('dist/js/')));
});

gulp.task('sass', function () {
    return gulp.src('resources/sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('dist/css/'));
});

gulp.task('build', function () {
    gulp.start('vendor-scripts');
    gulp.start('scripts');
    gulp.start('sass');
});

gulp.task('watch', function () {
    gulp.watch('resources/sass/**/*.scss', ['sass']);
    gulp.watch('resources/js/*.js', ['scripts']);
});