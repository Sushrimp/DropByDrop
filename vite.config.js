import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: "public/build",
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

// vercel.json
// "env": {
//         "APP_ENV": "production",
//         "APP_DEBUG": "false",
//         "APP_URL": "https://drop-by-drop-alpha.vercel.app",
//         "APP_KEY": "=base64:lQAhLeCRpd8dWb+yG32BBxw/Jh4tI6Z2VQIju5SCYek=",
//         "APP_CONFIG_CACHE": "/tmp/config.php",
//         "APP_EVENTS_CACHE": "/tmp/events.php",
//         "APP_PACKAGES_CACHE": "/tmp/packages.php",
//         "APP_ROUTES_CACHE": "/tmp/routes.php",
//         "APP_SERVICES_CACHE": "/tmp/services.php",
//         "VIEW_COMPILED_PATH": "/tmp",
//         "CACHE_DRIVER": "array",
//         "LOG_CHANNEL": "stderr",
//         "SESSION_DRIVER": "cookie"
//     },
//     "outputDirectory": "public"
