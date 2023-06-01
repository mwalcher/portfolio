import LibroImage from '@/assets/images/libro-hero.jpg';
import PinkPrecastImage from '@/assets/images/pink-precast-hero.jpg';
import WhatsMyImage from '@/assets/images/whats-my-hero.jpg';
import ZucoraImage from '@/assets/images/zucora-hero.jpg';
import { arcaneDisclaimer } from '@/constants/roles';
import { inlineLink } from '@/helpers';
import LibroPage from '@/pages/LibroProject.vue';
import PinkPrecastPage from '@/pages/PinkPrecastProject.vue';
import WhatsMyPage from '@/pages/WhatsMyProject.vue';
import ZucoraPage from '@/pages/ZucoraProject.vue';
import type { IsProject, ProjectsList } from '@/types/projects';

const projectTabContent = {
  libro: {
    about: [
      `The ${inlineLink(
        {
          fullLabel: 'Libro Credit Union Website',
          label: 'Libro Credit Union',
          link: 'https://libro.ca/',
        },
        true,
      )} wanted us to create a series of financial calculators to help potential customers better understand their finances while also giving them the opportunity to see what Libro has to offer. The goal for these calculators was to break down intimidating financial unknowns into manageable steps. The calculators are structured to ask the user one question at a time, while educating them about financial jargon and providing tips to help coach the user through financial decisions.`,
      `Right now there is a ${inlineLink(
        {
          fullLabel: "Libro's Mortgage Calculator",
          label: 'Mortgage Calculator',
          link: 'https://libro.ca/calculators/mortgage',
        },
        true,
      )} and a ${inlineLink(
        {
          fullLabel: "Libro's Budget Planner",
          label: 'Budget Planner',
          link: 'https://libro.ca/calculators/budget-planner',
        },
        true,
      )} with plans for more calculators to be introduced into the series later.`,
      arcaneDisclaimer,
    ],
    technical: [
      `The calculators are built in ${inlineLink(
        {
          fullLabel: 'React Website',
          label: 'React',
          link: 'https://reactjs.org/',
        },
        true,
      )} using the ${inlineLink(
        {
          fullLabel: 'Create React App Website',
          label: 'Create React App',
          link: 'https://facebook.github.io/create-react-app/',
        },
        true,
      )} framework from Facebook. I was the front-end developer on this project and I worked with a designer, an intermediate back-end developer and I had the support of one of the senior back-end developers. The intermediate back-end developer set up API routes for me to access and pass data to. The senior back-end developer helped me build the scaffold for the calculators.`,
      "While building the scaffold for the calculators our goal was for the components to be dynamic and scalable so that it would be easy to set up new calculators. We did this by setting up configuration files for each calculator that would set up each step of the calculator. The config is where we could define the core set up of each page: the route, the content container, and any adjustments from the default behaviour of the progress bar and pagination on the page. All of the components were built to be generic and customizable because they couldn't be too specific to one calculator, they needed to be able to work for any calculator.",
      `Each of the calculators is built to store the data from each step in ${inlineLink(
        {
          fullLabel: 'Redux Website',
          label: 'Redux',
          link: 'https://redux.js.org/',
        },
        true,
      )} and then provide the user with a summary once they are finished the steps. Part of the value of the calculators is analysing the data and performing calculations for the user such as their estimated total mortgage and payment amount based on the payment frequency they chose.`,
    ],
  },
};

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
  tabContent: projectTabContent.libro,
};

export const pinkPrecast: IsProject = {
  key: 'pink-precast',
  name: 'Pink Precast',
  description: 'An informational website for a concrete manufacturer',
  image: PinkPrecastImage,
  website: 'https://www.pinkprecast.com/',
  component: PinkPrecastPage,
  tabContent: projectTabContent.libro,
};

export const whatsMy: IsProject = {
  key: 'whats-my',
  name: 'WhatsMy',
  description: 'A promotional website to introduce a product',
  image: WhatsMyImage,
  website: 'https://mwalcher.github.io/',
  disabled: true,
  component: WhatsMyPage,
  tabContent: projectTabContent.libro,
};

export const projects: ProjectsList = [libro, zucora, pinkPrecast, whatsMy];

export const disabledProjectLabel = 'Coming Soon';
