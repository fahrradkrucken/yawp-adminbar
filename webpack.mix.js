let mix = require('laravel-mix');

// -- SCSS
mix.sass('src-front/package.scss', 'static/adminbar.css');
mix.options({
    postCss: [require('autoprefixer')],
    processCssUrls: true,
    autoprefixer: {
        options: {
            flexbox: true,
            browsers: [
                'IE >= 11',
                'Edge >= 12',
                'Firefox >= 28',
                'Chrome >= 21',
                'Safari >= 6.1',
                'Opera >= 12.1',
                'iOS >= 7',
            ]
        }
    }
});

// -- BrowserSync
mix.browserSync({
    proxy: 'opensource-wp',
    // injectChanges: false,
    files: [
        'src-front/{*,**/*}.scss',
    ],
});