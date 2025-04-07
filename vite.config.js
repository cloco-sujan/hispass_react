import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/app.jsx",
                "resources/js/components/HomeComponent.jsx",
            ],
            refresh: true,
        }),
        react(),
        tailwindcss(),
    ],
    resolve: {
        alias: {
            "@": "resources/js",
        },
    },
});
