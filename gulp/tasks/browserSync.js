module.exports = function () {
    $.gulp.task('browser-sync', function () {
        $.browserSync.init({
            notify: false,
            proxy: 'bachmut',
            port: 3000
        });

    });
};