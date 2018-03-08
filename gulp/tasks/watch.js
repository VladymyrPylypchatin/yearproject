module.exports = function () {
    $.gulp.task('watch', ['browser-sync', 'css-libs', 'scripts'], function () {
        $.gulp.watch('app/pre-assets/sass/**/*.sass', ['sass']);
        $.gulp.watch('app/*.php', $.browserSync.reload);
        $.gulp.watch('app/pre-assets/js/**/*.js', $.browserSync.reload);
    });
};