import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import 'normalize.css'
import './assets/styles/main.scss'
import App from './App.vue'
import Home from './pages/Home.vue'

const router = createRouter({
  history: createWebHistory(),
  scrollBehavior(to, from, savedPosition) {
    return savedPosition || { left: 0, top: 0 }
  },
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },
    {
      path: '/:catchAll(.*)',
      name: 'not-found',
      component: Home,
    },
  ],
})

createApp(App).use(router).mount('#app')
