// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/main.js', 'js').js('src/main2.js', 'js').sass('src/style.scss', 'css').setPublicPath('dist');