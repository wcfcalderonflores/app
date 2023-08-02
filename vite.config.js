import { defineConfig } from 'vite';

export default defineConfig({
  // Otras configuraciones...
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `@import "./resources/sass/app.scss";`,
      },
    },
  },
});

