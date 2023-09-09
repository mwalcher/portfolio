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
  - Update framework icons to be current (maybe redesign component)
  - Update colours to use CSS variables and clean up theme colours to be a lot simpler
  - Fix Header colour transition
    - Do I need pinia? Forms? Header state?

DevOps Improvements:
  - Set up SSH on server & update deployment + filezilla to use SSH
  - Clean up GTM & Set up GA4
  - Connect GA to EmailJS
*/
