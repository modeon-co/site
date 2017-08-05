var gulp = require('gulp');
var browserSync = require('browser-sync');
var header = require('gulp-header');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var htmlmin = require('gulp-htmlmin');
var stylus = require('gulp-stylus');
var connect = require('gulp-connect-php');
var pkg = require('./package.json');

var banner = ['/*!\n',
    ' * Modeon Devhouse site - www.modeon.co\n',
    ' * Licensed under <%= pkg.license %>\n',
    ' */\n',
    ''
].join('');

gulp.task('stylus', function () {
    return gulp.src([
        'resources/assets/stylus/app.styl',
    ])
    .pipe(stylus())
    .pipe(header(banner, { pkg: pkg }))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('public/css'))
    .pipe(browserSync.reload({
        stream: true
    }));
});

gulp.task('minify-js', function() {
    return gulp.src('resources/assets/js/**/*.js')
        .pipe(uglify())
        .pipe(header(banner, { pkg: pkg }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('public/js'))
        .pipe(browserSync.reload({
            stream: true
        }));
});

gulp.task('copy', function() {
    gulp.src([
        'node_modules/jquery/dist/jquery.min.js'
    ]).pipe(gulp.dest('public/vendor/jquery'));

    gulp.src([
        'node_modules/bootstrap/dist/**/*',
        '!**/npm.js', '!**/bootstrap-theme.*',
        '!**/*.map'
    ]).pipe(gulp.dest('public/vendor/bootstrap'));

    gulp.src([
        'node_modules/font-awesome/**',
        '!node_modules/font-awesome/**/*.map',
        '!node_modules/font-awesome/.npmignore',
        '!node_modules/font-awesome/*.txt',
        '!node_modules/font-awesome/*.md',
        '!node_modules/font-awesome/*.json'
    ]).pipe(gulp.dest('public/vendor/font-awesome'));
});

gulp.task('reload', function() {
    browserSync.reload();
});

// Php Server Tasks
gulp.task('connect-php', function() {
   connect.server({
      base: './public',
      port: 8000,
      keepalive: true
   });
});

// Configure the browserSync task
gulp.task('browserSync', ['connect-php'], function() {
    browserSync({
        proxy: '127.0.0.1:8000',
        port: 8080,
        open: true
    });

    gulp.watch('resources/assets/stylus/**/*.styl', ['stylus', 'reload']);
    gulp.watch('resources/assets/js/**/*.js', ['minify-js', 'reload']);
    gulp.watch('resources/assets/cacto/controllers/*.js', ['controllers', 'reload']);
    gulp.watch('resources/assets/cacto/views/*.html', ['views', 'reload']);
    gulp.watch('resources/views/**/*.blade.php', ['reload']);
    gulp.watch('routes/**/*', ['reload']);
});

// Dev task with browserSync
gulp.task('dev', ['browserSync', 'stylus', 'minify-js', 'copy']);

gulp.task('default', ['stylus', 'minify-js', 'copy']);
// gulp.task('default', ['dev']);