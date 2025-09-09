// vite.config.js
import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  server: { host: '127.0.0.1' },
  plugins: [
    laravel({
      input: [
        'resources/css/landinger.css',
        'resources/js/landinger.js',
        'resources/css/app.css',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],
})
