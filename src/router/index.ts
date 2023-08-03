import { homeNav, successPage } from '@/constants/navigation';
import { projects } from '@/constants/projects';
import Home from '@/pages/HomePage.vue';
import { createRouter, createWebHistory } from 'vue-router';

const projectRoutes = projects.map((project) => ({
  path: `/${project.key}`,
  name: project.key,
  component: project.component,
}));

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  scrollBehavior(to, from, savedPosition) {
    return savedPosition || { left: 0, top: 0 };
  },
  routes: [
    {
      path: '/',
      name: homeNav.link,
      component: Home,
    },
    ...projectRoutes,
    {
      ...successPage,
      component: () => import('@/pages/SuccessPage.vue'),
    },
    {
      path: '/:catchAll(.*)',
      name: 'not-found',
      component: () => import('@/pages/ErrorPage.vue'),
    },
  ],
});

export default router;
