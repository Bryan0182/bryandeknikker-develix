import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/scss/bryandeknikker.scss', 'resources/scss/develix.scss', 'resources/scss/home.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
