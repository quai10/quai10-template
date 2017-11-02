// Requires
var gulp = require('gulp');

// Plugins inclusion
var plugins = require('gulp-load-plugins')();

// Paths
var source = './assets/src',
    prod = './assets/dist';


// ----------
// ERROR TASK
// ----------

function onError(err) {
  console.log(err);
  this.emit('end');
}


// -----------------------------
// Build task : css js img fonts
// -----------------------------

// CSS Task = LESS & CSSO & autoprefixer
gulp.task('css', function () {
  return gulp.src(source + '/css/styles.less')
    .pipe(plugins.less())
    .on('error', onError)
    .pipe(plugins.autoprefixer())
    .pipe(plugins.csso())
    .pipe(plugins.rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(prod + '/css/'));
});

// JS Task = concatenation and copying, don't forget to add vendors
gulp.task('js', function () {
  return gulp.src([
    source + '/../../node_modules/swiper/dist/js/swiper.min.js', // swiperJS
    source + '/js/*.js' // scripts du thème
  ])
    .pipe(plugins.concat('global.min.js'))
    //.pipe(plugins.uglify())
    .on('error', onError)
    .pipe(gulp.dest(prod + '/js/'));
});

// IMG Task = optimization & copying
gulp.task('img', function () {
  return gulp.src(source + '/img/*.{png,jpg,jpeg,gif,svg}')
    .pipe(plugins.imagemin({
      svgoPlugins: [{
        removeViewBox: false
      }, {
        cleanupIDs: false
      }]
    }))
    .on('error', onError)
    .pipe(gulp.dest(prod + '/img'));
});

// FONT Task = file copying (src -> prod)
gulp.task('fonts', function () {
  return gulp.src(source + '/fonts/*')
    .pipe(gulp.dest(prod + '/fonts'));
});


// -----------------
// TASKS declaration
// -----------------

gulp.task('build', ['css', 'js', 'img', 'fonts']);
gulp.task('watch', function () {
  gulp.watch(source + '/css/*.less', ['css']);
  gulp.watch(source + '/js/*.js', ['js']);
});
gulp.task('default', ['build']);
