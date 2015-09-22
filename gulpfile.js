/**
*
* The packages we are using
* Not using gulp-load-plugins as it is nice to see whats here.
*
* npm link gulp && npm link gulp-stylus && npm link gulp-autoprefixer && npm link gulp-uglify && npm link gulp.spritesmith && npm link rupture
**/
var gulp         = require('gulp');
var stylus       = require('gulp-stylus');
var rupture      = require('rupture');
var prefix       = require('gulp-autoprefixer');
var uglify       = require('gulp-uglify');
var spritesmith  = require('gulp.spritesmith');


/**
  ### Разработка ###
**/

// стили
gulp.task('compile:stylus', function() {
  gulp.src('./stylus/*.styl')
  .pipe(stylus({
    compress: true,
    use: rupture(),
  }))
  .on('error', function (err) {
    console.error('Error!', err.message);
  })
  .pipe(prefix('last 3 versions', '> 1%', 'ie 8', 'Android 2', 'Firefox ESR'))
  .pipe(gulp.dest('./static/css'));
});

// спрайты
gulp.task('sprites', function () {
  var spriteData = gulp.src('./static/images/icons/*.*').pipe(spritesmith({
    imgName: 'sprite.png',
    imgPath: '../images/sprite.png',
    cssName: '_sprites.styl',
    cssFormat: 'stylus',
    algorithm: 'binary-tree',
    padding: 4,
    cssVarMap: function(sprite) {
      sprite.name = 'icon-' + sprite.name
    }
  }));
  spriteData.img.pipe(gulp.dest('./static/images/'));
  spriteData.css.pipe(gulp.dest('./stylus/base'));
});


// по умолчанию
gulp.task('default', ['compile:stylus', 'sprites'], function() {
  gulp.watch('stylus/**/*.styl', ['compile:stylus']);
  gulp.watch('static/images/icons/*.*', ['sprites']);
});