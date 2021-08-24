const mix = require('laravel-mix');
require('vuetifyjs-mix-extension');
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
let rootPath = 'public/dist';

let jsPath = 'js/';
let cssPath = 'css/';


if (mix.inProduction()) {
    mix
        .setPublicPath(rootPath)
        .webpackConfig({
            module: {
                rules: [
                    {
                        test: /\.pug$/,
                        oneOf: [
                            {
                                resourceQuery: /^\?vue/,
                                use: ['pug-plain-loader']
                            }
                        ]
                    }
                ]
            },
            resolve: {
                extensions: ['*', '.js', '.jsx', '.vue', '.ts', '.tsx', '.coffee'],
            },
        })
        // Web
        .js('resources/js/web/app.js', jsPath + 'web.js')
        .vuetify('vuetify-loader', 'resources/sass/web/assets/_variables.scss')
        .vue()
        // Web
        .sass('resources/sass/web/app.scss', cssPath + 'web.css')

    mix.version();
} else {
    mix
        .setPublicPath(rootPath)
        // Web
        .webpackConfig({
            module: {
                rules: [
                    {
                        test: /\.pug$/,
                        oneOf: [
                            {
                                resourceQuery: /^\?vue/,
                                use: ['pug-plain-loader']
                            }
                        ]
                    }
                ]
            },
            resolve: {
                extensions: ['*', '.js', '.jsx', '.vue', '.ts', '.tsx', '.coffee'],
            },
        })
        .js('resources/js/web/app.js', jsPath + 'web.js')
        .vuetify('vuetify-loader', 'resources/sass/web/assets/_variables.scss')
        .vue()
        // Web
        .sass('resources/sass/web/app.scss', cssPath + 'web.css')
        .sourceMaps()
        .webpackConfig({
            devtool: 'inline-source-map'
        });
}
