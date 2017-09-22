var gulp = require('gulp');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');

//script paths
var jsDest = 'js';
var cssDest = 'css';

gulp.task('scriptsBase', function() {  
    return gulp.src([
        'js/vendor/modernizr-custom.js',
        'js/data.js', 
        'js/plugins.js',
        'js/utility.js', 
        'js/steps.js',
        'js/_intro.js', 
        'js/_step1.js', 
        'js/_step2.js', 
        'js/_step3.js', 
        'js/_step4.js', 
        'js/_step5.js',
        'js/_step6.js',
        'js/_step7.js'
    ])
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});

gulp.task('scriptsRun', function() {  
    return gulp.src([
        'js/main.js'
    ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});

gulp.task('css', function () {
    return gulp.src([
        'css/general.css',
        'css/typo.css',
        'css/util.css',
        'css/layout.css',
        'css/intro.css',
        'css/step1.css',
        'css/step2.css',
        'css/step3.css',
        'css/step4.css',
        'css/step5.css',
        'css/step6.css',
        'css/step7.css'
    ])
        .pipe(minifyCSS())
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
        .pipe(concat('style.min.css'))
        .pipe(gulp.dest(cssDest))
});

gulp.task('default', ['scriptsBase', 'scriptsRun', 'css'], function(){});