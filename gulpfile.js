const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const cleanCSS = require('gulp-clean-css');

// Compile SCSS to CSS
gulp.task('build:scss', function () {
  return gulp
    .src('wp-content/themes/Template/assets/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(cleanCSS())
    .pipe(gulp.dest('wp-content/themes/Template/assets/css/'));
});

// Watch for changes in SCSS files
gulp.task('watch:scss', function () {
  gulp.watch('wp-content/themes/Template/assets/scss/**/*.scss', gulp.series('build:scss'));
});
