var gulp     = require('gulp'),
    uglify   = require('gulp-uglify'),
    stylus   = require('gulp-stylus'),
    nib      = require('nib'),
    pug      = require('gulp-pug'),
    rename   = require('gulp-rename'),
    imagemin = require('gulp-imagemin');

// Scripts Task
// Para comprimir el javaScript
gulp.task('scripts', function(){
  gulp.src('js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('./'));
});

// Styles Task
// para hacer mas fluido el css y comprimirlo
gulp.task('stylus', function(){
  gulp.src('stylus/*.styl')
    .pipe(stylus({ use: nib(), compress: true }))
    .pipe(gulp.dest('./'));
});

// Pug Task
// Comprimir el HMl y renombrar la extension a PHP
gulp.task('pug', function(){
  gulp.src('pug/*.pug')
    .pipe(pug({
      pretty: false
      }))
    .pipe(rename(function (path) {
        path.extname = ".php"
      }))
    .pipe(gulp.dest('./'));
});

// Image Task
// Comprimir las imagenes
gulp.task('image', function(){
  gulp.src('img/*')
    .pipe(imagemin())
    .pipe(gulp.dest('./'));
});

// Watch Tasl
// Observa los archivos para si hay cambios ejecutar el script
gulp.task('watch', function(){
  gulp.watch('js/*.js', ['scripts']);
  gulp.watch('stylus/*.styl', ['stylus']);
  gulp.watch('pug/*.pug', ['pug']);
  gulp.watch('img/*')
});

gulp.task('default', ['scripts', 'stylus', 'watch', 'image']);
