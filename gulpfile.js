var gulp = require('gulp');
var cssnano = require('gulp-cssnano');

gulp.task('minify', function() {
    return gulp.src('src/assets/css/main.css')
        .pipe(cssnano())
        .pipe(gulp.dest('dist'));
})