const gulp = require('gulp');
const webpack = require('webpack-stream');
const watch = require('gulp-watch');
const browserSync = require('browser-sync').create();
const newer = require('gulp-newer');
const imagemin = require('gulp-imagemin');
const minifyImg_JPG = require('imagemin-jpeg-recompress');
const minifyImg_PNG = require('imagemin-pngquant');
const minifyImg_GIF = require('imagemin-gifsicle');

gulp.task('webpack', function () {
  return gulp.src('src/main.js')
    .pipe(webpack(require('./webpack.config.js')))
    .pipe(gulp.dest('dist/'))
    .pipe(browserSync.stream());
});

gulp.task('minifyImages', function () {
  return gulp.src('src/images/*.{jpg,jpeg,png,gif}')
    .pipe(newer('dist/images'))
    .pipe(imagemin([
      minifyImg_JPG(),
      minifyImg_PNG(),
      minifyImg_GIF()
    ]))
    .pipe(gulp.dest('dist/images'));
});

gulp.task('watch', function () {
  browserSync.init({
    proxy: 'http://engressrepair.local',  // WordPressサイトのURLに変更
  });

  watch('src/main.js', gulp.series('webpack'));
  watch('src/scss/style.scss', gulp.series('webpack'));
  // 他の監視対象のファイルやディレクトリを追加
  // ファイルが更新されたらBrowserSyncでリロード
  gulp.watch('src/main.js', gulp.series('webpack'));
  gulp.watch('src/scss/style.scss', gulp.series('webpack'));
  gulp.watch('src/main.js').on('change', browserSync.reload);
  gulp.watch('src/scss/*.scss').on('change', browserSync.reload);
  gulp.watch('src/images/*.{jpg,jpeg,png,gif}', gulp.series('minifyImages'));
});


gulp.task('default', gulp.series('webpack','minifyImages', 'watch',function(done) {
    done();
}));

