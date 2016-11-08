const elixir = require('laravel-elixir'),
    gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync'),
    path = require("path");
    
// require("laravel-elixir-browsersync-official");


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.styles([
        "normalize.css",
        "main.css"
    ], "public/assets/css")
    .webpack("app.js", "public/assets/js")
});

// Starting gulp-connect-php and browserSync server
gulp.task('connect', () => {
  connect.server({
      base: "./public",
      port: "8000"
  }, () => {
    browserSync({
      proxy: "127.0.0.1:8000"
    });
  });
});


// Task for watching files for changes 
gulp.task("watcher", function() {
    gulp.watch(["./public/**", "./resources/**", "./app/**"]).on("change", browserSync.reload);
});


// Serving
gulp.task('serve', ["connect", "watcher"]);


// Moving files from build to repo
gulp.task("move", function() {
    gulp.src(["./**", "!./node_modules"])
    .pipe(gulp.dest(path.join(__dirname, "../GitHub/cniconseil")));
});


