import LibroImage from '@/assets/images/libro-hero.jpg';
import PinkPrecastImage from '@/assets/images/pink-precast-hero.jpg';
import WhatsMyImage from '@/assets/images/whats-my-hero.jpg';
import ZucoraImage from '@/assets/images/zucora-hero.jpg';
import projectTabContent from '@/constants/projectContent';
import LibroPage from '@/pages/LibroProject.vue';
import PinkPrecastPage from '@/pages/PinkPrecastProject.vue';
import WhatsMyPage from '@/pages/WhatsMyProject.vue';
import ZucoraPage from '@/pages/ZucoraProject.vue';
import type { IsProject, ProjectsList } from '@/types/projects';

export const libro: IsProject = {
  key: 'libro',
  name: 'Libro Calculators',
  description: 'Step by step financial calculators',
  image: LibroImage,
  website: 'https://libro.ca/calculators/',
  component: LibroPage,
  tabContent: projectTabContent.libro,
};

export const zucora: IsProject = {
  key: 'zucora',
  name: 'Zucora',
  description: 'An e-commerce store for a local retailer',
  image: ZucoraImage,
  component: ZucoraPage,
  tabContent: projectTabContent.zucora,
};

export const pinkPrecast: IsProject = {
  key: 'pink-precast',
  name: 'Pink Precast',
  description: 'An informational website for a concrete manufacturer',
  image: PinkPrecastImage,
  website: 'https://www.pinkprecast.com/',
  component: PinkPrecastPage,
  tabContent: projectTabContent.pinkPrecast,
};

export const whatsMy: IsProject = {
  key: 'whats-my',
  name: 'WhatsMy',
  description: 'A promotional website to introduce a product',
  image: WhatsMyImage,
  website: 'https://mwalcher.github.io/',
  disabled: true,
  component: WhatsMyPage,
  tabContent: projectTabContent.whatsMy,
};

export const projects: ProjectsList = [libro, zucora, pinkPrecast, whatsMy];

export const disabledProjectLabel = 'Coming Soon';
