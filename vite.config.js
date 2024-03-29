import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "public/backend/assets/css/app.min.css",
                "public/backend/assets/css/bootstrap.min.css",
            ],
            refresh: true,
        }),
    ],
});
