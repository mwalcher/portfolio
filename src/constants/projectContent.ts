import LibroPhoneImage from '@/assets/images/libro-device-1-phone.png';
import LibroTabletImage from '@/assets/images/libro-device-2-tablet.png';
import LibroLaptopImage from '@/assets/images/libro-device-3-laptop.png';
import LibroDesktopImage from '@/assets/images/libro-device-4-desktop.png';
import PinkPrecastPhoneImage from '@/assets/images/pink-precast-device-1-phone.png';
import PinkPrecastTabletImage from '@/assets/images/pink-precast-device-2-tablet.png';
import PinkPrecastLaptopImage from '@/assets/images/pink-precast-device-3-laptop.png';
import PinkPrecastDesktopImage from '@/assets/images/pink-precast-device-4-desktop.png';
import WhatsMyPhoneImage from '@/assets/images/whats-my-device-1-phone.png';
import WhatsMyTabletImage from '@/assets/images/whats-my-device-2-tablet.png';
import WhatsMyLaptopImage from '@/assets/images/whats-my-device-3-laptop.png';
import WhatsMyDesktopImage from '@/assets/images/whats-my-device-4-desktop.png';
import ZucoraPhoneImage from '@/assets/images/zucora-device-1-phone.png';
import ZucoraTabletImage from '@/assets/images/zucora-device-2-tablet.png';
import ZucoraLaptopImage from '@/assets/images/zucora-device-3-laptop.png';
import ZucoraDesktopImage from '@/assets/images/zucora-device-4-desktop.png';
import { laravel, react, vue } from '@/constants/frameworks';
import { arcane, arcaneDisclaimer } from '@/constants/roles';
import { inlineLink } from '@/helpers';

export default {
  libro: {
    tabContent: {
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
        `The calculators are built in ${inlineLink(react, true)} using the ${inlineLink(
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
    sliderImages: [
      {
        src: LibroPhoneImage,
        alt: 'Libro Mortgage Calculator introduction page represented on an iPhone',
      },
      {
        src: LibroTabletImage,
        alt: 'Libro Mortgage Calculator step 1 page represented on an iPad',
      },
      {
        src: LibroLaptopImage,
        alt: 'Libro Mortgage Calculator summary page represented on a MacBook Pro',
      },
      {
        src: LibroDesktopImage,
        alt: 'Libro Mortgage Calculator contact form represented on an iMac',
      },
    ],
  },
  zucora: {
    tabContent: {
      about: [
        `${inlineLink(
          {
            fullLabel: 'Zucora Website',
            label: 'Zucora',
            link: 'https://zucorahome.com/',
          },
          true,
        )} wanted us to create a fresh new look for their website. The purpose of the website was to inform the user about their brand as well as offer an e-commerce platform to showcase their product lines.`,
        '<strong>Note:</strong> Zucora has since updated their website, so our version is no longer accessible.',
        arcaneDisclaimer,
      ],
      technical: [
        `I worked on this project with another front-end developer, a designer and two back-end developers. The website was built using the ${inlineLink(
          laravel,
          true,
        )} framework with the ${inlineLink(
          {
            fullLabel: 'Shopify Website',
            label: 'Shopify',
            link: 'https://www.shopify.ca/',
          },
          true,
        )} API to manage the product data. We used ${inlineLink(
          react,
          true,
        )} on the product details page to add the product to the user's cart, the header to show how many items are in the cart and the cart page to show changes to the user's cart in real time. I worked on all the React components myself, while also working with the other front-end developer on the components for rest of the website.`,
        'On the product details page I collected the product data from the API and passed it to the React app on the page. Some products have one or two options the user can specify (such as size and length on mattress protectors). I created logic to check if the option selected is in stock and in the case of multiple options I had to check if the specific variant existed with the combined options selected. The quantity selector checked the remaining stock of the selected product and set a max quantity to make sure the user did not try to buy more than was available in stock. When the user added the product to the cart I created a loading state, as well as success and error messages based on the response from the API that animated in below the button to confirm the product was added to the cart or to inform the user there was a problem adding the product to the cart.',
        "On the cart page I loop through all the products stored in the user's cart. The user can adjust quantities for each product and when they do their total will be adjusted to account for the change in quantity. The user has the option to remove a product from their cart and if they remove an item the totals as well as the number of products in the cart shown in the header will be adjusted.",
      ],
    },
    sliderImages: [
      {
        src: ZucoraDesktopImage,
        alt: 'The Zucora home page represented on an iMac',
      },
      {
        src: ZucoraPhoneImage,
        alt: 'A list of Zucora products to buy represented on an iPhone',
      },
      {
        src: ZucoraLaptopImage,
        alt: 'A Zucora product details page adding the product to the cart represented on a MacBook Pro',
      },
      {
        src: ZucoraTabletImage,
        alt: 'The Zucora cart page represented on an iPad',
      },
    ],
  },
  pinkPrecast: {
    tabContent: {
      about: [
        `${inlineLink(
          {
            fullLabel: 'Pink Precast Website',
            label: 'Pink Precast',
            link: 'https://www.pinkprecast.com/',
          },
          true,
        )} wanted us to update their old website with a more modern design. They wanted a simple informational website with the ability to add new projects with a content management system (CMS).`,
        arcaneDisclaimer,
      ],
      technical: [
        `The website was built using the ${inlineLink(
          laravel,
          true,
        )} framework. I worked on this project with a designer and a back-end developer. The back-end developer setup the content management system (CMS) and I built all of the front-end for the website.`,
        `I had introduced myself to Laravel during my last year of school and then worked on a Laravel project with ${inlineLink(
          arcane,
          true,
        )} prior to building this website. I was able to set this project up by applying what I had learned from the other projects. Two of the things I became more comfortable using during this project was Laravel's Blade templates and the language files to store content. I built all my Blade files to be dynamic and reserved all content for the language files, so they can be reused on any page. Blade makes it easy to loop through sections of content from the array provided by the language files to prevent me from duplicating markup. The language files helped me organize and centralize content so I didn't have to store duplicate content.`,
      ],
    },
    sliderImages: [
      {
        src: PinkPrecastPhoneImage,
        alt: 'The Pink Precast home page represented on an iPhone',
      },
      {
        src: PinkPrecastTabletImage,
        alt: 'The Pink Precast contact page represented on an iPad',
      },
      {
        src: PinkPrecastLaptopImage,
        alt: 'A Pink Precast product page features section represented on a MacBook Pro',
      },
      {
        src: PinkPrecastDesktopImage,
        alt: 'A Pink Precast featured project page represented on an iMac',
      },
    ],
  },
  whatsMy: {
    tabContent: {
      about: [
        `${inlineLink(
          {
            fullLabel: 'Mobials Website',
            label: 'Mobials',
            link: 'https://mobials.com/',
          },
          true,
        )} wanted a promotional website to introduce their new product, WhatsMy. I was brought onto the project to do the front-end for the preliminary prototype of the website.`,
        "The idea behind WhatsMy is to inform users about the value of their vehicle(s) and real estate. The current problem that WhatsMy has identified is the lack of transparency in both the shopping process and ownership of a person's two largest assets: their home and vehicle. It seeks to help users keep track of the value of these assets as they appreciate or depreciate over time.",
      ],
      technical: [
        `The ${inlineLink(
          {
            fullLabel: 'Mobials Website',
            label: 'Mobials',
            link: 'https://mobials.com/',
          },
          true,
        )} development team wanted me to use ${inlineLink(
          vue,
          true,
        )} for the project, which was new to me. I did some research on Vue, reviewed the documentation and followed a few ${inlineLink(
          {
            fullLabel: 'Vue Mastery Website',
            label: 'Vue Mastery',
            link: 'https://www.vuemastery.com/',
          },
          true,
        )} tutorials before setting up the base project.`,
        'While setting up the base project I reviewed the style guide and the designs to compile a list of common styles and components in the designs that I knew I would be reusing. I built out the common design elements first so I could just drop them in while I was building the page specific components. I organized all the page sections into separate components to keep components simple and reusable. The design pushed me to elevate the animations for user interactions, like button hover states and opening the navigation, to enhance the user experience.',
        'The main reason we decided to use a single-page application (Vue.js) for the project was because we wanted to create a transition when the user navigated to a new page. The page transitions were a welcome challenge. I quickly discovered that Vue has a built in transition component that would handle a lot of the logic I thought I was going to have to do to make the page transitions seamless. The transition component was a bit of a learning curve for me to get use to because I had not used anything like it before. At first I did not understand how to set it up with my pages, but after some troubleshooting I created my first page transition. Once I got a simple element to animate across the screen to introduce the next page I was able to make it a bit more complicated and incorporate the 3 coloured gradient lines from the logo to stagger across the screen.',
        `${inlineLink(
          {
            fullLabel: "Kristiana's Website",
            label: 'Kristiana',
            link: 'https://www.wallflowerstudio.co/',
          },
          true,
        )} was my point of contact on the project as she took on the project management role as well as being the designer for the project. She continued the front-end after I completed the base prototype of the website.`,
      ],
    },
    sliderImages: [
      {
        src: WhatsMyPhoneImage,
        alt: 'The WhatsMy home page Use Cases section represented on an iPhone',
      },
      {
        src: WhatsMyTabletImage,
        alt: 'The WhatsMy how it works page What you must do section represented on an iPad',
      },
      {
        src: WhatsMyLaptopImage,
        alt: 'The WhatsMy contact page represented on a MacBook Pro',
      },
      {
        src: WhatsMyDesktopImage,
        alt: 'The WhatsMy about us page Leadership Team section represented on an iMac',
      },
    ],
  },
};
