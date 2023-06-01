import LibroImage from '@/assets/images/libro-hero.jpg';
import PinkPrecastImage from '@/assets/images/pink-precast-hero.jpg';
import WhatsMyImage from '@/assets/images/whats-my-hero.jpg';
import ZucoraImage from '@/assets/images/zucora-hero.jpg';
import type { IsProject, ProjectsList } from '@/types/projects';

export const libro: IsProject = {
  key: 'libro',
  name: 'Libro Calculators',
  description: 'Step by step financial calculators',
  image: LibroImage,
  website: 'https://libro.ca/calculators/',
};

export const zucora: IsProject = {
  key: 'zucora',
  name: 'Zucora',
  description: 'An e-commerce store for a local retailer',
  image: ZucoraImage,
};

export const pinkPrecast: IsProject = {
  key: 'pink-precast',
  name: 'Pink Precast',
  description: 'An informational website for a concrete manufacturer',
  image: PinkPrecastImage,
  website: 'https://www.pinkprecast.com/',
};

export const whatsMy: IsProject = {
  key: 'whats-my',
  name: 'WhatsMy',
  description: 'A promotional website to introduce a product',
  image: WhatsMyImage,
  website: 'https://mwalcher.github.io/',
  disabled: true,
};

export const projects: ProjectsList = [libro, zucora, pinkPrecast, whatsMy];

export const disabledProjectLabel = 'Coming Soon';
