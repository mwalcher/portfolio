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
  - Update colours to use CSS variables and clean up theme colours to be a lot simpler
  - Fix Header colour transition
    - Do I need pinia? Forms? Header state?
  - Update framework icons to be current (maybe redesign component) - review items from resume to include here
    - Rounded square containers for the icons that levitate with a shadow on hover
  - Update Resume

DevOps Improvements:
  - Set up SSH on server & update deployment + filezilla to use SSH
  - Clean up GTM & Set up GA4
  - Connect GA to EmailJS
*/
