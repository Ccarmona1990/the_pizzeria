// webpack.mix.js

let mix = require('laravel-mix');

mix
.options({
    processCssUrls: false,
})
.js('assets/js/scripts.js', 'dist')
.sass('assets/scss/style.scss','dist');