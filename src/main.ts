import { createPinia } from 'pinia';
import { createApp } from 'vue';

import App from '@/App.vue';
import '@/assets/styles/main.scss';
import router from '@/router';

const app = createApp(App);

app.use(createPinia());
app.use(router);

app.mount('#app');

/* TODO:
  - Fix Smooth Scroll header offset on mobile
  - Fix Header colour transition
  - Do I need pinia? Forms? Header state?
*/
