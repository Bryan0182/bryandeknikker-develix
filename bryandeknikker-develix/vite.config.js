import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/global/app.scss', 'resources/scss/bryandeknikker.nl/bryandeknikker.scss', 'resources/scss/develix.nl/develix.scss', 'resources/scss/develix.nl/header.scss', 'resources/scss/develix.nl/footer.scss', 'resources/scss/global/hero.scss', 'resources/scss/global/cta.scss', 'resources/scss/global/404.scss','resources/scss/global/services.scss', 'resources/scss/global/text.scss', 'resources/scss/global/features.scss', 'resources/scss/global/timeline.scss', 'resources/js/app.js', 'resources/js/timeline.js'],
            refresh: true,
        }),
    ],
});
