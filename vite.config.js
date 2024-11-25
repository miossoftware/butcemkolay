import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // CSS giriş dosyası
                'resources/js/app.js',  // JS giriş dosyası
            ],
            refresh: true, // Tarayıcı yenileme
        }),
    ],
});
