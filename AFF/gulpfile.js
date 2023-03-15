const projectName = "AuroraFlow/AFF";
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();

//compile scss into css
function style() {
    return gulp.src('./scss/aff.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('./src/root/app.core/css'))
    .pipe(browserSync.stream());
}

// Watch all src files, complie and live reload
function dev() {
    browserSync.init({ 
        browser: "firefox",
        proxy: `https://localhost:443/root/projects/${projectName}/src/root/`
    });
    
    // ** is for all files recursivly
    gulp.watch('./scss/**/*.scss', style);
    gulp.watch('./src/**/*.html').on('change',browserSync.reload);
    gulp.watch('./src/**/*.php').on('change',browserSync.reload);
    gulp.watch('./src/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.dev = dev;