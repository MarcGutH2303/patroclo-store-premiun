import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/img/banner_patroclo.jpg'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        outDir: 'public/build', // Aquí especificas el directorio correcto
        manifest: true, // Asegúrate de que se genera el manifest.json
    },
});
