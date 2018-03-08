module.exports = function () {
    $.gulp.task('img', function () {
        return $.gulp.src('app/pre-assets/img/**/*')
            .pipe($.cache(imagemin({
                interlaced: true,
                progressive: true,
                svgoPlugins: [{removeViewBox: false}],
                use: [pngquant()]
            })))
            .pipe($.gulp.dest('app/assets/img'));
    });
};