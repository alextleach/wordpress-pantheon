// Change these for each project as needed
var rootPath = 'XXX_REPLACE_THIS_XXX';
var credentials = {
    host: 'XXX_REPLACE_THIS_XXX',
    user: 'XXX_REPLACE_THIS_XXX',
    port: 22,
    key: 'XXX_REPLACE_THIS_XXX',
    remotePath: rootPath
};
var serve = require('gulp-ftp');
// var serve = require('gulp-sftp');


// If all files are kept in their original folders,
// nothing below this line should need to be changed
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cached');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var streamify = require('gulp-streamify');
var gulpif = require('gulp-if');
var util = require('gulp-util');
var googleWebFonts = require('gulp-google-webfonts');
var plumberErrorHandler = {
  errorHandler: notify.onError({
    title: 'Gulp',
    message: 'Error: <%= error.message %>'
  })
};

var phpFiles = [
  'functions.php',
  'header.php',
  'footer.php',
  'page.php'
];

gulp.task('php', function () {

  credentials.remotePath = rootPath;
  gulp.src(phpFiles)
    .pipe(cache('php'))
    .pipe(plumber(plumberErrorHandler))
    .pipe(gulp.dest('./'));
    // .pipe(gulpif(util.env.ftp, serve(credentials)));

});

gulp.task('templates', function () {

  credentials.remotePath = rootPath+'/templates';
  gulp.src('templates/*.php')
    .pipe(cache('php'))
    .pipe(plumber(plumberErrorHandler))
    .pipe(gulp.dest('templates/'));
    // .pipe(gulpif(util.env.ftp, serve(credentials)));

});

gulp.task('modules', function () {

  credentials.remotePath = rootPath+'/templates/modules';
  gulp.src(['templates/modules/*.php', 'templates/modules/*/*.php'])
    .pipe(cache('php'))
    .pipe(plumber(plumberErrorHandler))
    .pipe(gulp.dest('templates/modules/'));
    // .pipe(gulpif(util.env.ftp, serve(credentials)));

});

gulp.task('sass', function () {

  credentials.remotePath = rootPath;
  gulp.src('sass/style.scss')
    .pipe(plumber(plumberErrorHandler))
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sourcemaps.write('sass/'))
    .pipe(gulp.dest('./'));
    // .pipe(gulpif(util.env.ftp, serve(credentials)));

});

gulp.task('js', function () {

  credentials.remotePath = rootPath+'/js';
  gulp.src('js/modules/*.js')
    .pipe(plumber(plumberErrorHandler))
    .pipe(sourcemaps.init())
    .pipe(jshint())
    .pipe(jshint.reporter('fail'))
    .pipe(uglify())
    .pipe(sourcemaps.write('maps'))
    .pipe(gulp.dest('js/dist'));
    // .pipe(gulpif(util.env.ftp, serve(credentials)));

});

gulp.task('img', function() {

  credentials.remotePath = rootPath+'/img';
  gulp.src('img/original/*.{png,jpg,gif}')
    .pipe(cache('img'))
    .pipe(plumber(plumberErrorHandler))
    .pipe(imagemin({
      optimizationLevel: 7,
      progressive: true
    }))
    .pipe(gulp.dest('img'));
    // .pipe(gulpif(util.env.ftp, serve(credentials)));

});

gulp.task('fonts', function () {

  credentials.remotePath = rootPath+'/fonts';
  gulp.src('fonts.list')
    .pipe(googleWebFonts())
    .pipe(gulp.dest('fonts'));
    // .pipe(streamify(serve(credentials)));

});

gulp.task('watch', function() {

  gulp.watch(phpFiles, ['php']);
  gulp.watch('templates/*.php', ['templates']);
  gulp.watch(['templates/modules/*.php', 'templates/modules/*/*.php'], ['modules']);
  gulp.watch(['sass/pages/*.scss', 'sass/global/*.scss', 'sass/vendor/*.scss', 'sass/modules/*.scss', 'sass/style.scss'], ['sass']);
  gulp.watch('js/*/*.js', ['js']);
  gulp.watch('img/*/*.{png,jpg,gif,svg}', ['img']);

});

gulp.task('default', ['php', 'templates', 'modules', 'sass', 'js', 'img']);
