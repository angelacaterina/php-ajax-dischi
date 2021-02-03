// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/main.js', 'js').sass('src/style.scss', 'css').setPublicPath('dist');