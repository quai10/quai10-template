// Requires
var gulp = require('gulp');

// Plugins inclusion
var plugins = require('gulp-load-plugins')();

// Paths
var source = './assets/src',
    prod = './assets/dist';


// -----------------------------
// Build task : css js img fonts
// -----------------------------

// CSS Task = LESS & CSSO & autoprefixer
gulp.task('css', function () {
  return gulp.src(source + '/css/styles.less')
    .pipe(plugins.less())
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
    source + '/js/*.js',
    source + '/vendor/jquery/dist/jquery.min.js' // jQuery vendor
  ])
    .pipe(plugins.concat('global.min.js'))
    .pipe(plugins.uglify())
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
