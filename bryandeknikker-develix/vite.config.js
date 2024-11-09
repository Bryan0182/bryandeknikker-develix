import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/global/app.scss',
                'resources/scss/bryandeknikker.nl/bryandeknikker.scss',
                'resources/scss/develix.nl/develix.scss',
                'resources/scss/develix.nl/header.scss',
                'resources/scss/develix.nl/footer.scss',
                'resources/scss/global/hero.scss',
                'resources/scss/global/cta.scss',
                'resources/scss/global/404.scss',
                'resources/scss/global/services.scss',
                'resources/scss/global/text.scss',
                'resources/scss/global/features.scss',
                'resources/scss/global/timeline.scss',
                'resources/scss/global/blog-create.scss',
                'resources/scss/global/authentication.scss',
                'resources/scss/global/dashboard.scss',
                'resources/scss/global/blog-show.scss',
                'resources/scss/global/blogs.scss',
                'resources/scss/global/location-create.scss',
                'resources/js/global/app.js',
                'resources/js/global/timeline.js',
                'resources/js/develix.nl/wysiwyg-editor.js',
                'resources/js/develix.nl/blog-planner.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            external: [
                'tinymce/plugins/paste',
                'tinymce/plugins/link'
            ]
        }
    }
});
