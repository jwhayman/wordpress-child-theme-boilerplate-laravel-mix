let mix = require('laravel-mix');

// BrowserSync
mix.browserSync({
    proxy: 'wildpress.localhost',
    notify: false,
    files: [
        '**/*.php',
        'assets/scripts/**/*.js',
        'assets/styles/**/*.scss',
    ]
});

// Output
mix.js('assets/scripts/main.js', 'dist')
    .sass('assets/styles/main.scss', 'dist')
    .sourceMaps()
    .setPublicPath('dist')
    .setResourceRoot('./')
    .version();