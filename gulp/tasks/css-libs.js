module.exports = function () {
    $.gulp.task('css-libs', ['sass'], function () {
        return $.gulp.src('app/pre-assets/css/libs.css')
            .pipe($.cssnano())
            .pipe($.rename({suffix: '.min'}))
            .pipe($.gulp.dest('app/assets/css'));
    });
};