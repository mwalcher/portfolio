import LibroImage from '@/assets/images/libro-hero.jpg';
import PinkPrecastImage from '@/assets/images/pink-precast-hero.jpg';
import WhatsMyImage from '@/assets/images/whats-my-hero.jpg';
import ZucoraImage from '@/assets/images/zucora-hero.jpg';
import type { Project, ProjectsList } from '@/types/projects';

export const libro: Project = {
  key: 'libro',
  name: 'Libro Calculators',
  description: 'Step by step financial calculators',
  image: LibroImage,
  website: 'https://libro.ca/calculators/',
};

export const zucora: Project = {
  key: 'zucora',
  name: 'Zucora',
  description: 'An e-commerce store for a local retailer',
  image: ZucoraImage,
};

export const pinkPrecast: Project = {
  key: 'pink-precast',
  name: 'Pink Precast',
  description: 'An informational website for a concrete manufacturer',
  image: PinkPrecastImage,
  website: 'https://www.pinkprecast.com/',
};

export const whatsMy: Project = {
  key: 'whats-my',
  name: 'WhatsMy',
  description: 'A promotional website to introduce a product',
  image: WhatsMyImage,
  website: 'https://mwalcher.github.io/',
  disabled: true,
};

export const projects: ProjectsList = [libro, zucora, pinkPrecast, whatsMy];
