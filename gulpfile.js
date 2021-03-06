'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
 
gulp.task('sass', function () {
  return gulp.src('./stylesheets/sass/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./stylesheets/css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./stylesheets/sass/**/*.scss', ['sass']);
});