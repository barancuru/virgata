import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
import vue from '@vitejs/plugin-vue';
=======
>>>>>>> 2ef141ec3131092ad637695ca7bbd252f295c6e2

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
>>>>>>> 2ef141ec3131092ad637695ca7bbd252f295c6e2
});
