/*
 * Gulp Workflow Script
 *
 * This document contains all of the custom scripts for the project's Gulp
 * powered automation workflow.
 */

// Require Plugins
var gulp = require('gulp');
var del = require('del');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');

// Task to Process Styles
gulp.task('styles', function(){
  return gulp.src('src/css/*.css')
    .pipe(postcss(cssnext))
    .pipe(gulp.dest(''))
});


// Task to Clean Files
gulp.task('clean', function() {
	return del(['dist/css']);
});


// Setup Watch Task
gulp.task('watch', ['styles'], function (){
  gulp.watch('src/css/*.css', ['styles']);
});

// Setup Default Task
gulp.task('default', ['watch']);
