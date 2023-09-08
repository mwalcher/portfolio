import { fileURLToPath, URL } from 'node:url';

import UnheadVite from '@unhead/addons/vite';
import vue from '@vitejs/plugin-vue';
import { defineConfig } from 'vite';
import svgLoader from 'vite-svg-loader';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue(), svgLoader(), UnheadVite()],
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url)),
    },
  },
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `@import 'src/assets/styles/base/helpers';`,
      },
    },
  },
});
