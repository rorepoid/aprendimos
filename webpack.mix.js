const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/nprogress.css', 'public/css/app.css')
    .postCss('resources/css/app.css', 'public/css', [
      require('tailwindcss'),
    ])
    .sass('resources/sass/app.scss', 'public/css')
    .webpackConfig({
     output: { chunkFilename: 'js/[name].js?id=[chunkhash]' },
     resolve: {
       alias: {
         'vue$': 'vue/dist/vue.runtime.esm.js',
         '@': path.resolve('resources/js'),
       },
     },
   })
   .babelConfig({
       plugins: ['@babel/plugin-syntax-dynamic-import']
   })
   .version()

