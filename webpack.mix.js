const mix = require('laravel-mix');

mix.styles([
    'resources/css/your-stylesheet.css',
    // Добавьте другие файлы, если есть
], 'public/css/app.css');
mix.copyDirectory('resources/images', 'public/images');
