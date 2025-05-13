import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'resources/scss/app.scss',
            'resources/js/appPorfolio.js',
            'resources/js/appHome.js'
        ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {

            '~fontawesome': path.resolve(__dirname, 'node_modules/@fortawesome/fontawesome-free'),
            '~img': path.resolve(__dirname, 'public/img'),
        }
    },
});