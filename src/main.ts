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
Website Improvements:
  - Update content to be current
  - Fix Header colour transition
    - Do I need pinia? Forms? Header state?

DevOps Improvements:
  - Set up SSH on server & update deployment + filezilla to use SSH
  - Clean up GTM & Set up GA4
  - Connect GA to EmailJS
*/
