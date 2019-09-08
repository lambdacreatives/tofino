var argv = require('yargs').argv;

var manifest = require('./assets/manifest.json');
var paths = manifest.paths;

import gulp from 'gulp';
import gulpif from 'gulp-if';
import stylelint from 'gulp-stylelint';

// import plumber from 'gulp-plumber';
// import notify from 'gulp-notify';
// import {create as bsCreate} from 'browser-sync';

import del from 'del';

import eslint from 'gulp-eslint';

// const browserSync = bsCreate.create();

var production = argv.production || false,
    allowlint  = argv.allowlint || false,
    mobile     = argv.desktop || false,
    slug       = argv.slug || '';

// Override standard gulp.src task to use plumber
// var _gulpsrc = gulp.src;
// gulp.src = function() {
//   return _gulpsrc.apply(gulp, arguments)
//     .pipe(gulpif(!production, plumber({
//       errorHandler: function(err) {
//         notify.onError("Error: " + err.toString())(err);
//         this.emit('end');
//       }
//     })));
// };

function clean() {
  return del([paths.dist]);
}

function scriptsLint() {
  return gulp
    .src(paths.scripts + '/**/*.js')
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(gulpif(production, gulpif(!allowlint, eslint.failAfterError())))
}

function copyFonts() {
  return gulp
    .src(paths.fonts + '*')
    .pipe(gulp.dest(paths.dist + 'fonts'));
}

function stylesLint() {
  return gulp
    .src(paths.styles + '**/*.scss')
    .pipe(stylelint({
      syntax: 'scss',
      reporters: [{
        formatter: 'string',
        console: true
      }]
    }))
    .pipe(gulpif(production, 
      gulpif(allowlint, stylelint({
        failAfterError: false
      }))
    ));
}

gulp.task('clean', clean);
gulp.task('scripts:lint', scriptsLint);
gulp.task('fonts', copyFonts);
gulp.task('styles:lint', stylesLint);

// Compile SCSS to CSS
// require('./gulp/styles')(gulp, production, browserSync);

// Lints scss files
// require('./gulp/styles-lint')(gulp, production, allowlint);

// // Critical path css
// require('./gulp/styles-critical')(gulp);

// Concatenate & Minify JS
require('./gulp/scripts')(gulp, production);

// // Lint js files
// require('./gulp/scripts-lint')(gulp, production, allowlint);

// // Min / Crush images
// require('./gulp/images')(gulp, production);

// // Minify SVGS + run sprite task
// require('./gulp/svgs')(gulp);

// // Create SVG sprite file
// require('./gulp/svg-sprite')(gulp, production);

// // Copy font files from assets to dist
// require('./gulp/fonts')(gulp);

// // Lint PHP files using ruleset.xml
// require('./gulp/php-lint')(gulp, allowlint, production);

// // Validate files using PHP Mess Dectector
// require('./gulp/php-md')(gulp);

// // Deletes the build folder entirely.
// require('./gulp/clean')(gulp);

// // Browser sync for the Ngrok tunnel
// require('./gulp/browser-sync')(gulp, browserSync);

// // Ngrok for tunnels
// require('./gulp/ngrok')(gulp, browserSync);

// // Google Page Speed Insights
// require('./gulp/psi')(gulp, slug, mobile);

// // W3C HTML validation
// require('./gulp/w3c-validate')(gulp, slug);

// // WAVE Accessibility validation
// require('./gulp/wave')(gulp, slug);

// // Watch Files For Changes
// require('./gulp/watch')(gulp, browserSync);

// // Generic build task. Use with '--production' for production builds
// gulp.task('build',
//   'Main build task. Runs styles, scripts, images, svgs, fonts and php:lint. Does not delete dist directory.', [
//     'images',
//     'svgs',
//     'styles',
//     'scripts',
//     'fonts',
//     'php:lint'
//   ]
// );


// Lint task, used for pre-commit hook. Use with '--production' for production builds
// gulp.task('lint',
//   'Lints all PHP, SCSS and JS files.', [
//     'styles:lint',
//     'scripts:lint',
//     'php:lint'
//   ]
// );


// // Build for deployment
// gulp.task('build-deploy',
//   'Build assets for deployment task. Runs styles, scripts, images, svgs, fonts.', [
//     'images',
//     'svgs',
//     'styles',
//     'scripts',
//     'fonts'
//   ]
// );

// gulp.task('default',
//   'Runs the build task. Deleting the dist directory first.',
//   ['clean'],
//   function() {
//     gulp.start('build');
//   }
// );
