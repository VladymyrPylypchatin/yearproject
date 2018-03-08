var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglifyjs'),
    cssnano = require('gulp-cssnano'),
    rename = require('gulp-rename'),
    del = require('del'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    cache = require('gulp-cache'),
    autoprefixer = require('gulp-autoprefixer'),
    cheerio = require('gulp-cheerio'),
    replace = require('gulp-replace'),
    svgSprite = require('gulp-svg-sprite'),
    svgmin = require('gulp-svgmin'),
    runSequence  = require('run-sequence');


gulp.task('sass', function () {
    return gulp.src('app/pre-assets/sass/**/*.scss')
        .pipe(sass())
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {cascade: true}))
        .pipe(gulp.dest('app/assets/css'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('scripts', function () {
    return gulp.src('app/pre-assets/js/mine.js')
        .pipe(uglify())
        .pipe(gulp.dest('app/assets/js'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('scripts-libs', function () {
    return gulp.src([
        'app/pre-assets/libs/jquery/dist/jquery.slim.js',
        'app/pre-assets/libs/owl.carousel/dist/owl.carousel.js'
    ])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('app/assets/js'))
});


gulp.task('css-libs', ['sass'], function () {
    return gulp.src('app/pre-assets/css/libs.scss')
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('app/assets/css'));
});

gulp.task('browser-sync', function () {
    browserSync.init({
        notify: false,
        proxy: 'bachmut',
        port: 3000
    });

});


// TODO: переделать чтобы раздделяло попапкам и не переносило svg
gulp.task('img', function () {
    return gulp.src(['app/pre-assets/img/raster/**/*'], ['!app/pre-assets/img/svg'])
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('app/assets/img/raster'));
});


// creating svg spite
gulp.task('svgSprite', function () {
    return gulp.src('app/pre-assets/img/svg/**/*.svg')
    // minify svg
        .pipe(svgmin({
            js2svg: {
                pretty: true
            }
        }))
        // remove all fill, style and stroke declarations in out shapes
        .pipe(cheerio({
            run: function ($) {
                $('[fill]').removeAttr('fill');
                $('[stroke]').removeAttr('stroke');
                $('[style]').removeAttr('style');
            },
            parserOptions: {xmlMode: true}
        }))
        // cheerio plugin create unnecessary string '&gt;', so replace it.
        .pipe(replace('&gt;', '>'))
        // build svg sprite
        .pipe(svgSprite({
            mode: {
                symbol: {
                    sprite: "../assets/img/svg/sprite.svg",
                    render: {
                        scss: {
                            dest:'../pre-assets/sass/_sprite.scss',
                            template: "app/pre-assets/sass/_sprite-template.scss"
                        }
                    }
                }

            }

        }))
        .pipe(gulp.dest('app/'));
});

gulp.task('mytask', function() {
    console.log(__dirname + '\\app\\pre-assets\\sass\\_sprite.scss');
});

gulp.task('svgSpriteSass', function () {
    return gulp.src("app/assets/img/svg/sprite/_sprite.scss")
        .pipe(gulp.dest("app/pre-assets/sass"))
});

gulp.task('clean', function () {
    return del.sync('app/assets');
});

gulp.task('clear', function () {
    return cache.clearAll();
});

gulp.task('watch', ['browser-sync', 'clean', 'css-libs', 'scripts', 'scripts-libs', 'img','svgSprite'], function () {
    gulp.watch('app/pre-assets/sass/**/*.scss', ['sass']);
    gulp.watch('app/pre-assets/img/svg/**/*.svg', ['svgSprite']);//test
    gulp.watch('app/*.php', browserSync.reload);
    gulp.watch('app/pre-assets/js/**/*.js', ['scripts']);
});

gulp.task('build', ['clean', 'img', 'css-libs', 'scripts-libs', 'scripts', 'svg'], function () {
    var buildCss = gulp.src([
        'app/pre-assets/css/main.css',
        'app/pre-assets/css/libs.min.css'
    ])
        .pipe(gulp.dest('app/assets/css'));

    var buildFonts = gulp.src('app/pre-assets/fonts/**/*')
        .pipe(gulp.dest('app/assets/fonts'));

    var buildJs = gulp.src('app/pre-assets/js/**/*')
        .pipe(gulp.dest('app/assets/js'));
});

// TODO: сделать таскер для js
// TODO: сделать таскер для js