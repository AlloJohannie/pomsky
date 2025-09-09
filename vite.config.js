import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  server: { host: '127.0.0.1' },
  plugins: [
    laravel({
      input: [
        // Admin / Breeze / app global
        'resources/css/app.css',
        'resources/js/app.js',

        // Thème public Landinger
        'resources/css/landinger.css',
        'resources/js/landinger.js',

        // (si tu as un thème Filament perso)
        // 'resources/css/filament.css',
      ],
      refresh: true,
    }),
  ],
})
