// No notifications for me
process.env.DISABLE_NOTIFIER = true;

var gulp = require('gulp');
var csso = require('gulp-csso');
var gutil = require('gulp-util');
var shell = require('gulp-shell');
var uncss = require('gulp-uncss');
var uglify = require('gulp-uglify');
var csscomb = require('gulp-csscomb');
var elixir = require('laravel-elixir');




elixir.extend('jsmagic', function(files) {

    gulp.task('jsmagic', function() {
        gulp.src(files)
            .pipe(shell("echo Bonjuorno").on('error', gutil.log))
            .pipe(uglify())
            .pipe(gulp.dest('./public/js/vendor/'));
    });

    return this.task('jsmagic');
});


elixir.extend('precssmagic', function(files) {

    gulp.task('precssmagic', function() {
        gulp.src(files)
            .pipe(shell("echo precssmagic").on('error', gutil.log))
            .pipe(csscomb())
    });

    return this.task('precssmagic');
});

elixir.extend('postcssmagic', function(files) {

    gulp.task('postcssmagic', function() {
        gulp.src(files)
            .pipe(shell("echo postcssmagic").on('error', gutil.log))
            .pipe(csso())
            .pipe(gulp.dest('./public/css/'));
    });

    return this.task('postcssmagic');
});

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */



elixir(function(mix) {
    mix.sass('app.scss')
        .jsmagic([
            './resources/assets/js/vendor/bootstrap.js',
            './resources/assets/js/vendor/jquery.js'
        ])
        .precssmagic([
            './resources/assets/sass/desktop.scss',
            './resources/assets/sass/fablet.scss',
            './resources/assets/sass/mobile.scss',
            './resources/assets/sass/tablet.scss',
        ])
        .postcssmagic([
            './public/css/*.css'
        ]);
});
