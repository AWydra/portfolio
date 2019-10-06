import gulp from "gulp";
import babel from "gulp-babel";
import sass from "gulp-sass";
import uglify from "gulp-uglify";
import autoprefixer from "gulp-autoprefixer";
import clean from "gulp-clean-css";
import browserSync from "browser-sync";
import del from "del";
import tinypng from "gulp-tinypng-unlimited";
import connect from "gulp-connect-php";
import include from "gulp-include";

const sync = browserSync.create();
const reload = sync.reload;
const config = {
  paths: {
    src: {
      php: "./src/**/*.php",
      img: "./src/img/**/*.*",
      sass: [
        "./src/sass/style.scss",
        "./src/sass/home.scss",
        "./src/sass/project.scss",
        "./src/sass/error404.scss"
      ],
      js: ["./src/js/home.js", "./src/js/project.js"]
    },
    dist: {
      main: "./dist",
      css: "./dist/css",
      js: "./dist/js",
      img: "./dist/img"
    }
  }
};

gulp.task("sass", () => {
  return gulp
    .src(config.paths.src.sass)
    .pipe(sass())
    .pipe(
      autoprefixer({
        browsers: ["last 2 versions"],
        grid: true
      })
    )
    .pipe(clean())
    .pipe(gulp.dest(config.paths.dist.css))
    .pipe(sync.stream());
});

function refresh(done) {
  reload();
  done();
}

gulp.task(
  "js",
  gulp.series(function js() {
    return gulp
      .src(config.paths.src.js)
      .pipe(include())
      .pipe(
        babel({
          presets: ["env"]
        })
      )
      .pipe(uglify())
      .pipe(gulp.dest(config.paths.dist.js));
  }, refresh)
);

gulp.task(
  "static",
  gulp.series(
    function movePHP() {
      return gulp
        .src(config.paths.src.php)
        .pipe(gulp.dest(config.paths.dist.main));
    },

    function moveConfig() {
      return gulp
        .src("./src/.htaccess")
        .pipe(gulp.dest(config.paths.dist.main));
    },
    refresh
  )
);

gulp.task(
  "images",
  gulp.series(function moveImages() {
    return gulp
      .src(config.paths.src.img)
      .pipe(tinypng())
      .pipe(gulp.dest(config.paths.dist.img));
  }, refresh)
);

gulp.task("clean", () => {
  return del([config.paths.dist.main]);
});

gulp.task("build", gulp.series(["clean", "sass", "js", "static", "images"]));

function server() {
  connect.server({}, function() {
    sync.init({
      injectChanges: true,
      open: "external",
      proxy: "127.0.0.1/portfolio/dist"
    });
  });
}

gulp.task("default", gulp.series(["build"]));

gulp.task(
  "watch",
  gulp.series(["default"], function watch() {
    gulp.watch("src/sass/**/*.scss", gulp.series(["sass"]));
    gulp.watch("src/js/**/*.js", gulp.series(["js"]));
    gulp.watch(config.paths.src.php, gulp.series(["static"]));
    gulp.watch(config.paths.src.img, gulp.series(["images"]));
    return server();
  })
);
