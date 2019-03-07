import gulp from 'gulp';
import babel from 'gulp-babel';
import sass from 'gulp-sass';
import uglify from 'gulp-uglify';
import autoprefixer from 'gulp-autoprefixer';
import clean from 'gulp-clean-css';
import browserSync from 'browser-sync';
import del from 'del';

const sync = browserSync.create();
const reload = sync.reload;
const config = {
    paths: {
        src: {
            html: './src/**/*.php',
            img: './src/img/**.*',
            sass: ['src/sass/style.scss'],
            js: [
                'src/js/main.js',
            ]
        },
        dist: {
            main: './dist',
            css: './dist/css',
            js: './dist/js',
            img: './dist/img'
        }
    }
};

gulp.task('sass', () => {
    return gulp.src(config.paths.src.sass)
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(clean())
        .pipe(gulp.dest(config.paths.dist.css))
        .pipe(sync.stream());
});

function refresh(done) {
    reload();
    done();
}

gulp.task('js', gulp.series(function js() {
    return gulp.src(config.paths.src.js)
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(gulp.dest(config.paths.dist.js));
}, refresh));

gulp.task('static', gulp.series(
    function moveHtml() {
        return gulp.src(config.paths.src.html)
            .pipe(gulp.dest(config.paths.dist.main));
    },
    function moveImages() {
        return gulp.src(config.paths.src.img)
            .pipe(gulp.dest(config.paths.dist.img));
    },
    refresh
));

gulp.task('clean', () => {
    return del([config.paths.dist.main]);
});

gulp.task('build', gulp.series(['clean', 'sass', 'js', 'static']));

function server() {
    sync.init({
        injectChanges: true,
        server: config.paths.dist.main
    });
};

gulp.task('default', gulp.series(['build']));

gulp.task('watch', gulp.series(['default'], function watch() {
    gulp.watch('src/sass/style.scss', gulp.series(['sass']));
    gulp.watch('src/js/**/*.js', gulp.series(['js']));
    gulp.watch('src/*.php', gulp.series(['static']));
    return server();
}));