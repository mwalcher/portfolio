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
DevOps Improvements:
  - Set up SSH on server & update deployment + FileZilla to use SSH
*/
