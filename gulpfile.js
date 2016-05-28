'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    path = require('path'),
    sass = require('gulp-sass'),
    minifycss = require('gulp-minify-css'),
    livereload = require('gulp-livereload'),
    uglify = require('gulp-uglify');

// styles

gulp.task('styles:dev', function () {
  return gulp.src('sass/main.scss')
  .pipe(sass()).on('error', sass.logError)
  .pipe(concat('main.css'))
  .pipe(gulp.dest('css'))
  .pipe(livereload());
});

gulp.task('styles:prod', function () {
  return gulp.src('sass/main.scss')
  .pipe(sass()).on('error', sass.logError)
  .pipe(concat('main.min.css'))
  .pipe(minifycss())
  .pipe(gulp.dest('css'));
});

gulp.task('styles:ie', function () {
  return gulp.src('sass/ie.scss')
  .pipe(sass()).on('error', sass.logError)
  .pipe(concat('ie.min.css'))
  .pipe(minifycss())
  .pipe(gulp.dest('css'));
});

gulp.task('styles', ['styles:dev', 'styles:prod', 'styles:ie']);

// scripts

gulp.task('scripts:top:dev', function () {
  return gulp.src([
    'javascripts/vendor/modernizr.js',
    'javascripts/vendor/plugins.js'
  ])
  .pipe(concat('top.js'))
  .pipe(gulp.dest('js'));
});

gulp.task('scripts:top:prod', function () {
  return gulp.src([
    'javascripts/vendor/modernizr.js',
    'javascripts/vendor/plugins.js'
  ])
  .pipe(concat('top.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest('js'));
});

gulp.task('scripts:main:dev', function () {
  return gulp.src([
    'javascripts/main.js',
  ])
  .pipe(concat('main.js'))
  .pipe(gulp.dest('js'));
});

gulp.task('scripts:main:prod', function () {
  return gulp.src([
    'javascripts/main.js',
  ])
  .pipe(concat('main.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest('js'));
});

gulp.task('scripts', ['scripts:top:dev', 'scripts:top:prod', 'scripts:main:dev', 'scripts:main:prod']);

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('sass/**/*.scss', ['styles:dev']);
});
