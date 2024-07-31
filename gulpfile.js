const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function compileSass() {
    return src('assets/scss/styles.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(dest('assets/css/'));
}

function watchSass() {
    watch('assets/scss/**/*.scss', compileSass);
}

function build() {
    return compileSass(); 
}

exports.compileSass = compileSass;
exports.watch = watchSass;
exports.default = watchSass;
exports.build = build;
