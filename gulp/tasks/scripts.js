module.exports = function () {
    $.gulp.task('scripts', function () {
        return $.gulp.src([
            'app/pre-assets/libs/jquery/dist/jquery.slim.js',
            'app/pre-assets/libs/owl.carousel/dist/owl.carousel.js'
        ])
            .pipe($.concat('libs.min.js'))
            .pipe($.uglify())
            .pipe($.gulp.dest('app/assets/js'));
    });
};