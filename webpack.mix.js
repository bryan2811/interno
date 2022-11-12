const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');

/* A Laravel Mix extension for Webpack bundle analyzer support */
// require('laravel-mix-bundle-analyzer');
// if (!mix.inProduction()) {
//     mix.bundleAnalyzer();
// }

const tailwindcss = require('tailwindcss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
  // Public Path & BrowserSync Route
  .setPublicPath('./public')
  .browserSync('bracketmedia.local')

  // Javascript
  .js('resources/scripts/app.js', 'scripts')
  .blocks('resources/scripts/editor.js', 'scripts')
  .autoload({ jquery: ['$', 'window.jQuery'] })

  // Styles
  .sass('resources/styles/app.scss', 'styles')
  .sass('resources/styles/editor.scss', 'styles')
  .options({
    processCssUrls: false,
    postCss: [ tailwindcss('./tailwind.config.js') ],
  })

  // Directories
  .copyDirectory('resources/images', 'public/images')
  .copyDirectory('resources/fonts', 'public/fonts')
  
  // Files configuration
  .sourceMaps()
  .version();
