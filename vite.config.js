import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        proxy: {
            '/img': 'http://localhost:8000',
            '/storage': 'http://localhost:8000',
        },
        host: 'localhost',
    },
});

