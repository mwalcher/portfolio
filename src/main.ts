import { InferSeoMetaPlugin } from '@unhead/addons';
import { createHead } from '@unhead/vue';
import { createPinia } from 'pinia';
import { createApp } from 'vue';

import App from '@/App.vue';
import '@/assets/styles/main.scss';
import router from '@/router';

const app = createApp(App);

app.use(
  createHead({
    plugins: [InferSeoMetaPlugin()],
  }),
);
app.use(createPinia());
app.use(router);

app.mount('#app');

/* TODO:
Migration:
  - Form validation & recaptcha

Improvements:
  - Fix Smooth Scroll header offset on mobile
  - Fix Header colour transition
  - Do I need pinia? Forms? Header state?
  - Clean up GTM
  - Setup Auto Reply, Save Contacts, add connect recaptcha + analytics to EmailJS
*/
