# [3.1.1](https://github.com/creativedotdesign/tofino/compare/v3.0.0...v3.1.1) (2021-04-06)

## Features

- Tailwind Version Update. ([fea6df5](https://github.com/creativedotdesign/tofino/commit/fea6df533c4fa8a84d91da8149903a8e2de7f544))

# [3.1.0](https://github.com/creativedotdesign/tofino/compare/v3.0.0...v3.1.0) (2021-04-04)

### Bug Fixes

- ACF Correct JSON Paths. ([58edf47](https://github.com/creativedotdesign/tofino/commit/58edf477a1377f96f1d58c0aa6ccff3e810dfaf2))
- Custom social icon order. Fixes [#294](https://github.com/creativedotdesign/tofino/issues/294). ([bbdabf2](https://github.com/creativedotdesign/tofino/commit/bbdabf2d24d63cddfa850fe13fe72ba153edc463))
- Larger content width. ([08a66d3](https://github.com/creativedotdesign/tofino/commit/08a66d3dcf20674ffff2d39a62d3dc2d30c0a60f))
- Menu tweaks. ([7781107](https://github.com/creativedotdesign/tofino/commit/77811079a501b0179cef436fa8fcd8cdeeb1fd0d))
- Remove admin link to Customizr. ([e4c5544](https://github.com/creativedotdesign/tofino/commit/e4c5544e566f6b499446a918e4b86d312d9d8fed))
- Update default footer. ([c624ecc](https://github.com/creativedotdesign/tofino/commit/c624ecc659b3b275b51c42980114c4df633d7fd6))
- Update tracker URL to creativedot domain. ([bd8bd3f](https://github.com/creativedotdesign/tofino/commit/bd8bd3fbd8cfead3c6e3e27eb460e3d334d7caf6))

### Features

- A working mobile menu. ([257b968](https://github.com/creativedotdesign/tofino/commit/257b968ef0692197a94f57308bd766e60c8ef2a2))
- Cleaner assets loading + remove more junk. ([cf56ada](https://github.com/creativedotdesign/tofino/commit/cf56ada39f9c0181db7c5520afe51465adcfb9d8))
- Cleaner WordPress markup and trimmed admin area. ([8a9c18a](https://github.com/creativedotdesign/tofino/commit/8a9c18a5feb64f0d65ae8e79a1f3e5b2857c1197))
- Enable HTML for notification/alert content. ([f093a9b](https://github.com/creativedotdesign/tofino/commit/f093a9ba7b33ac064fb90531c4ac9a7df470b516))
- Misc Tweaks. ([24f3658](https://github.com/creativedotdesign/tofino/commit/24f36580c14680ec381d698bcd5c3c484845d3c6))
- Remove Google Plus from social icons. ([c078437](https://github.com/creativedotdesign/tofino/commit/c078437e502f2804d453b922d55eadab863909f4))
- Remove IE Banner from header. ([5df3892](https://github.com/creativedotdesign/tofino/commit/5df3892011a0d4bc5efcaed9d87cd6fdbbdf3be6))
- Tailwind-JIT and Build Changes. ([6690b7b](https://github.com/creativedotdesign/tofino/commit/6690b7b3c7622e8b59a82704df7fc1a1e557aa27))
- Tidy Youtube SVG. ([7e1f343](https://github.com/creativedotdesign/tofino/commit/7e1f343743743d1dbfdd26427836bac57136d28c))
- Update default Widget Text. ([4641327](https://github.com/creativedotdesign/tofino/commit/4641327ef0c309fbeb1cf05ef9f504279e0ffbb8))

# 3.0.0: Nov 25 2020

- Tailwind v2
- Updated Dependencies
- Remove Bootstrap
- Major Cleanup

# 2.0.0: Sept 12 2019

- New build scripts using Laravel-Mix
- Lot's of bug fixes
- Updated Boostrap to the latest version

# 1.10.0: Aug 18 2017

- Cookie notification doesn't play well with cache #251
- Update critical styles task #238
- Theme option - hide nav on scroll down #218
- Ajax Form Data - Export and Delete #242

# 1.9.0: Aug 16 2017

- Fragment Cache is broken #250
- Update and require Node Version 6.x #249
- Add taxonomy only template route #247
- Fix PHP Linter to exclude template files #246
- Fix dashboard widget theme option #244
- Ajax Form Construct Data Sanitize #243
- Submitting AjaxForm from localhost fails to save data #240
- social svgs padding and fill="currentColor" #239
- Add file timestamp to svg sprite. #237
- Empty \$user_email_address in Contact form demo #236
- Update CSS & JS for Bootstrap 4 Beta Release

# 1.8.0: Feb 21 2017

- Rename .bitbucket-pipelines.yml #221
- Fix single quote converted to html attribute in AjaxForm #226
- Update to Bootstrap Alpha 6 #219
- Add more tracker support #222
- Contact form reply to address #223
- Add custom dashboard widget #224
- Update .gitignore to exclude nested vendor directories #232
- Update dependancies & gulp tasks
- Add social media network colors to SCSS file
- Add truncate SCSS mixin
- Update README files

# 1.7.0: Dec 2 2016

- New gulp tasks for performance / accessibility (PSI, WAVE, W3C)
- New gulp task for tunneling (Ngrok), required for above gulp tasks.
- Social media icon shortcode update
- BS Alpha 5 SCSS
- New validation library [Respect Validation](https://github.com/Respect/Validation)
- Various bug fixes
- Breakup Theme Options
- Restructure folders in lib
- Add yarn.lock file
- Updated README files
- Update dependancies
- Move theme options in the Customizer root panel.
- Add FragmentCache class
- Add page title helper function
- Add template part with arguments help function

# 1.6.0: Feb 19 2016

- Update deps
- Fix jQuery and Cookies JS module imports
- Real SVG Titles
- JS window.loaded function
- Add Vimeo icon to social icons
- Fix tracker issue
- Fix address multiline issue
- Data Tables
- AjaxForm, original button text if multiple buttons within form element
- JS routes files aren't being watched

# 1.5.0: Sept 13 2016

- AjaxForm JS as ES6 module
- Shrinkwrap NPM deps
- Allow custom variables to be passed to email template function
- Update WP_Customizer with native validation
- JS cookie expiry fix
- Add PHP version check
- Remove IE11 temp CSS flexbox fix
- Rename $color to $bar-color in variables.scss & nav.scss
- Update dev deps
- Update Bootstrap version
- Cleaner DOM routing for JS
- Misc bug fixes

# 1.4.0: May 29 2016

- Fix tracker URL issue
- Update NPM dependencies
- Add contact form docs
- Use Style lint replacing Sass lint
- Update login form admin logo hook due to WP 4.5 change
- Fix notices on archive template
- Add Instagram and Soundcloud icon
- Add WooCommerce reset stylesheet
- Update shortcode docs
- Fix mobile menu display issue
- Fix @extend inside @include
- Add WebFontLoader support with no FOUT theme option
- Featured images for all post types unless turned off
- Add pagination with Bootstrap 4 supported styles
- Include theme directory url in JS
- Add support for multiple CC email addresses
- AjaxForm server side field validation
- Various minor bug fixes
- Send custom email to user

# 1.3.0: Mar 31 2016

- SVG Shortcode documentation
- Comment out unused Bootstrap components
- Move lib includes out of composer.json
- Use NPM instead of Bower for front-end dependencies
- Misc bugfixes

This release uses ES6 to include and call Javascript libraries. Browserify and Babelify are included in the scripts build task.

# 1.2.0: Mar 16 2016

- Refactor gulpfile.js and split gulp tasks (and use eslint)
- Update npm dependencies
- Polyfill IE11 flexbox issues
- Fix BrowserSync css injection
- Add WPML template compatibility
- Docblock all functions and files
- Add AjaxForm class
- Update README to include info about deployment
- Replace OptionTree with WP Customizer for theme options
- Remove unit tests until a better solution is implemented
- Include default social network links and icons
- Misc bugfixes

# 1.1.0: Feb 19 2016

- Bugfixes and stabilize dependancies.
- Readme updates
- New: Critical CSS
- New: jQuery move to footer

# 1.0.0: Jan 5 2016

Initial Release
