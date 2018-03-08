module.exports = function () {
    $.gulp.task('sass', function () {
        return $.gulp.src('app/pre-assets/sass/**/*.sass')
            .pipe($.sass())
            .pipe($.autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {cascade: true}))
            .pipe($.gulp.dest('app/assets/css'))
            .pipe($.browserSync.reload({stream: true}))
    });
};