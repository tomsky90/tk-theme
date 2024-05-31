const { watch, src, dest, series, parallel } = require("gulp");
const browserSync = require("browser-sync").create();
const sass = require("gulp-sass")(require("sass"));
const cleanCSS = require("gulp-clean-css");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const del = require("del");

const config = {
  app: {
    js: "./app/js/*.js",
    scss: "./app/scss/**/*.scss",
    images: "./app/images/**/*",
  },
  dist: {
    base: "./assets/",
    css: "./assets/css",
    js: "./assets/js",
    images: "./assets/images",
  },
};

function liveReload(done) {
  browserSync.init({
    proxy: "http://labellatheme.local/",
  });
  done();
}

function reload(done) {
  browserSync.reload();
  done();
}

function scssTask() {
  return src(config.app.scss)
    .pipe(sass().on("error", sass.logError))
    .pipe(cleanCSS())
    .pipe(concat("main.css"))
    .pipe(dest(config.dist.css))
    .pipe(browserSync.stream());
}

function jsTask() {
  return src(config.app.js)
    .pipe(concat("script-min.js"))
    .pipe(uglify())
    .pipe(dest(config.dist.js))
    .pipe(browserSync.stream());
}

function cleanUp() {
  return del([
    `${config.dist.base}/**`,
    `!${config.dist.images}`,
    `!${config.dist.images}/**`,
  ]);
}

function copyImages() {
  return src(config.app.images).pipe(dest(config.dist.images));
}

function watchFiles() {
  watch(config.app.scss, series(scssTask, reload));
  watch(config.app.js, series(jsTask, reload));
  watch("./**/*.php", reload);
  watch(config.app.images, series(copyImages, reload));
}

exports.default = series(
  cleanUp,
  parallel(scssTask, jsTask, copyImages),
  parallel(watchFiles, liveReload)
);

exports.prod = series(cleanUp, parallel(scssTask, jsTask, copyImages));
