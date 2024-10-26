import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/global/app.scss', 'resources/scss/bryandeknikker.nl/bryandeknikker.scss', 'resources/scss/develix.nl/develix.scss', 'resources/scss/develix.nl/header.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
