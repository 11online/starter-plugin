var gulp        = require('gulp');
var rsync       = require('gulp-rsync');
var config      = require('./config.json');


gulp.task('deploy', function() {
  gulp.src('*')
    .pipe(rsync({
      root: '',
      hostname: config.hostname,
      username: 'root',
      destination: config.destination,
      archive: true,
      silent: false,
      compress: true,
      verbose: true,
    }));
});

gulp.task('default', ['deploy']);
