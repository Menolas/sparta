const gulp = require("gulp");
const sass = require("gulp-sass");
const sourcemaps = require("gulp-sourcemaps");
const watch = require("gulp-watch");
const server = require("browser-sync").create();

gulp.task('style', function() {
  return gulp.src("./sass/style.scss")
  .pipe(sourcemaps.init())
  .pipe(sass().on("error", sass.logError))
  .pipe(sourcemaps.write("./"))
  .pipe(gulp.dest("./css"))
  .pipe(server.stream())
});

// JavaScript
gulp.task('javascript', function() {
  return gulp.src("./js/*.js")
  .pipe(jshint())
  .pipe(jshint.reporter('default'))
  .pipe(gulp.dest("./js-build"));
});

gulp.task("server", function () {
  server.init({
    proxy: "sparta",
    notify: false,
  });

  gulp.watch("sass/**/*.scss", gulp.series("style"));
  gulp.watch("*.php").on("change", server.reload);
});
