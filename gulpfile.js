'use strict';

var gulp = require('gulp'),
    concat = require('gulp-concat'),
    path = require('path'),
    sass = require('gulp-sass'),
    minifycss = require('gulp-minify-css'),
    uglify = require('gulp-uglify');

gulp.task('styles:dev', function () {
    return gulp.src('sass/main.scss')
        .pipe(sass()).on('error', sass.logError)
        .pipe(concat('main.css'))
        .pipe(gulp.dest('css'));
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
