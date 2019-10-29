const mix = require('laravel-mix');

const atImport = require('postcss-import');
const nested = require('postcss-nested');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');
require('laravel-mix-postcss-config');
require('laravel-mix-imagemin');

mix.imagemin('resources/img/**/*', 'optimized');
mix.copyDirectory('./resources/img', './public/img');

mix.js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css')
  .postCssConfig({
    plugins: [
      atImport(),
      nested(),
      // colorFunction({ preserveCustomProps: true }),
      // colorModFunction(),
    ],
  })
  .tailwind('./tailwind.config.js');

if (mix.inProduction()) {
  mix
    .version()
    .purgeCss();
}
