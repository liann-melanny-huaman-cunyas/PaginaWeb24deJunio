import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  base: process.env.ASSET_URL || '/',
  plugins: [
    laravel({
      input: [
        'resources/scss/style.scss',
        'resources/css/app.css',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],
  build: {
    manifest: true, // Generar un archivo de manifiesto para la carga de recursos
    outDir: 'public/build', // Carpeta de salida para los archivos compilados en producción
  },

});
