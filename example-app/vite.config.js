import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/general.css','resources/scss/general.scss',
                    'resources/css/teachers.css','resources/scss/teachers.scss',
                    'resources/css/contacts.css','resources/scss/contacts.scss',
                    'resources/css/bootstrap-grid.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});



