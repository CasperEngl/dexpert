const mix = require('laravel-mix');

const atImport = require('postcss-import');
const nested = require('postcss-nested');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');
require('laravel-mix-postcss-config');
require('laravel-mix-svg');

mix.copyDirectory('resources/img', 'public/img');

mix.svg({
  class: 'icon fill-current max-w-full h-auto',
  assets: ['./resources/svg/'],
  output: './resources/js/svg.js',
});

mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css')
  .postCssConfig({
    plugins: [
      atImport(),
      nested(),
    ],
  })
  .tailwind('./tailwind.config.js');

if (mix.inProduction()) {
  const ASSET_URL = `${process.env.ASSET_URL}/`;

  mix.webpackConfig((webpack) => ({
    plugins: [
      new webpack.DefinePlugin({
        'process.env.ASSET_PATH': JSON.stringify(ASSET_URL),
      }),
    ],
    output: {
      publicPath: ASSET_URL,
    },
  }));

  mix
    .version()
    .purgeCss({
      folders: ['resources', 'public/vendor/nova', 'resources/views/vendor/mail/html'],
    });
}
