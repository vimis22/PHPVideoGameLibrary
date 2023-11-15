import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/groupstyle.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    //For WSL2 to work
    server: { 
        hmr: {
            host: 'localhost',
        },
    },
});


