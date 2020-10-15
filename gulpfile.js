'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');


gulp.task('sass', function () {
    return gulp.src('./app/sass/**/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('./app/styles/'))
      .pipe(browserSync.reload({stream: true}))
  });

  gulp.task('minifycss', function () {
    return gulp.src('./app/styles/style.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./app/styles/'))
});

  gulp.task('html', function(){
      return gulp.src('./app/**/*.html')
      .pipe(browserSync.reload({stream: true}))
  });
  gulp.task('js', function(){
      return gulp.src('./app/**/*.js')
      .pipe(browserSync.reload({stream: true}))
  });

  gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: 'app/'
        }
    })
  });

  gulp.task('watch', function(){
    gulp.watch('./app/sass/**/*.scss', gulp.parallel('sass'))
    gulp.watch('./app/**/*.html', gulp.parallel('html'))
    gulp.watch('./app/**/*.js', gulp.parallel('js'));
    gulp.watch('./app/styles/style.css', gulp.parallel('minifycss'));
  });

  gulp.task('default', gulp.parallel('watch', 'browser-sync'));