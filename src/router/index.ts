import { projects } from '@/constants/projects';
import Home from '@/pages/HomePage.vue';
import { createRouter, createWebHistory } from 'vue-router';

const projectRoutes = projects.map((project) => ({
  path: `/${project.key}`,
  name: project.key,
  component: Home, // TODO: add project pages to constant
}));

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  scrollBehavior(to, from, savedPosition) {
    return savedPosition || { left: 0, top: 0 };
  },
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },
    ...projectRoutes,
    {
      path: '/:catchAll(.*)',
      name: 'not-found',
      component: () => import('@/pages/HomePage.vue'),
    },
  ],
});

export default router;
