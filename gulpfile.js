'use strict';

var gulp        = require('gulp'),
    shell       = require('gulp-shell'),
    sass        = require('gulp-sass'),
    clean       = require('gulp-clean'),
    del         = require('del'),
    concat      = require('gulp-concat'),
    browserSync = require('browser-sync').create(),
    runSequence = require('run-sequence'),
    sourcemaps  = require('gulp-sourcemaps'),
    minify      = require('gulp-minify'),
    less        = require('gulp-less'),
    minifyCss   = require('gulp-minify-css'),
    theme       = require('./theme.json');


var themeName = theme.name.toLowerCase();

// Publish Locations
var publicPath          = '../../public';
var themePath           = publicPath + '/themes/' + themeName.toLowerCase();

// Theme Locations
var assetsDir           = "assets";
var resourceDir         = "resources";
var resourceAssetsDir   = resourceDir + "/assets";

// Resource Locations
var cssDir              = resourceAssetsDir + "/css";
var jsDir               = resourceAssetsDir + "/js";
var imgDir              = resourceAssetsDir + "/img";
var fontsDir            = resourceAssetsDir + "/fonts";
var sassDir             = resourceDir + "/scss";

// Assets Locations
var assetsCssDir        = assetsDir + "/css";
var assetsJsDir         = assetsDir + "/js";
var assetsImgDir        = assetsDir + "/img";
var assetsFontDir       = assetsDir + "/fonts";
var assetsVendorDir     = assetsDir + "/vendor";

gulp.task('clear-public', function () {
    return del(themePath+'/**/*', {force:true});
});

gulp.task('copy', function () {
    return gulp.src(resourceAssetsDir+"/**")
        .pipe(gulp.dest(assetsDir));
});

gulp.task('production', ['copy'], function () {
    return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + theme.name));
});

// Configure the proxy server for livereload
var proxyServer = "http://dev.iskelecim.com";

var arrAddFiles = [
    'views/**/*.php'
];

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: proxyServer,
        files: arrAddFiles,
        ghostMode: {
            clicks: true,
            location: true,
            forms: true,
            scroll: true
        },
        notify: false,
        open: false
    });
});

gulp.task('watch', ['browser-sync'], function () {
    gulp.watch('views/**/*.php', browserSync.reload);
    gulp.watch(resourceAssetsDir+'/js/**/*.js', browserSync.reload);
});
