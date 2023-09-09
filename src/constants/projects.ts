import LibroImage from '@/assets/images/libro-hero.jpg';
import LibroMetaImage from '@/assets/images/libro-meta-image.png';
import PinkPrecastImage from '@/assets/images/pink-precast-hero.jpg';
import PinkPrecastMetaImage from '@/assets/images/pink-precast-meta-image.png';
import WhatsMyImage from '@/assets/images/whats-my-hero.jpg';
import WhatsMyMetaImage from '@/assets/images/whats-my-meta-image.png';
import ZucoraImage from '@/assets/images/zucora-hero.jpg';
import ZucoraMetaImage from '@/assets/images/zucora-meta-image.png';
import projectContent from '@/constants/projectContent';
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
  metaImage: LibroMetaImage,
  themeColour: '#007cc0',
  website: 'https://libro.ca/calculators/',
  component: LibroPage,
  tabContent: projectContent.libro.tabContent,
  sliderImages: projectContent.libro.sliderImages,
};

export const zucora: IsProject = {
  key: 'zucora',
  name: 'Zucora',
  description: 'An e-commerce store for a local retailer',
  image: ZucoraImage,
  metaImage: ZucoraMetaImage,
  themeColour: '#434c9f',
  component: ZucoraPage,
  tabContent: projectContent.zucora.tabContent,
  sliderImages: projectContent.zucora.sliderImages,
};

export const pinkPrecast: IsProject = {
  key: 'pink-precast',
  name: 'Pink Precast',
  description: 'An informational website for a concrete manufacturer',
  image: PinkPrecastImage,
  metaImage: PinkPrecastMetaImage,
  themeColour: '#d52375',
  website: 'https://www.pinkprecast.com/',
  component: PinkPrecastPage,
  tabContent: projectContent.pinkPrecast.tabContent,
  sliderImages: projectContent.pinkPrecast.sliderImages,
};

export const whatsMy: IsProject = {
  key: 'whats-my',
  name: 'WhatsMy',
  description: 'A promotional website to introduce a product',
  image: WhatsMyImage,
  metaImage: WhatsMyMetaImage,
  themeColour: '#3500f5',
  website: 'https://mwalcher.github.io/',
  disabled: true,
  component: WhatsMyPage,
  tabContent: projectContent.whatsMy.tabContent,
  sliderImages: projectContent.whatsMy.sliderImages,
};

export const projects: ProjectsList = [libro, zucora, pinkPrecast, whatsMy];

export const disabledProjectLabel = 'Coming Soon';
