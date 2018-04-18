var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function(){
    return gulp.src('assets/scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
        .pipe(sass()) // Using gulp-sass
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});
// gulp watch
gulp.task('watch', ['browserSync', 'sass'], function(){
    gulp.watch('assets/scss/**/*.scss', ['sass']);
    gulp.watch('*.html', browserSync.reload);
    gulp.watch('assets/js/**/*.js', browserSync.reload);
    // Other watchers
});

gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: '.'
        },
    })
})