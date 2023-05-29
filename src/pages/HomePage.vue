<script setup lang="ts">
import HomeHeroBg from '@/assets/images/home-hero.jpg';
import GitIcon from '@/assets/images/icon-git.svg?url';
import LaravelIcon from '@/assets/images/icon-laravel.svg?url';
import ReactIcon from '@/assets/images/icon-react.svg?url';
import VueIcon from '@/assets/images/icon-vue-js.svg?url';
import FeaturedProject from '@/components/FeaturedProject.vue';
import Footer from '@/components/FooterSection.vue';
import Header from '@/components/HeaderBar.vue';
import Hero from '@/components/HeroSection.vue';
import MainContent from '@/components/MainContent.vue';
import { contactNav } from '@/constants/navigation';
import { projects } from '@/constants/projects';
import { arcane, tophat } from '@/constants/roles';
import { inlineLink } from '@/helpers';
import type { TabContentProp } from '@/types/components';
import type { Menu } from '@/types/navigation';

/* TODO Next:
- build project page template and set up routes
*/

const heroId = 'about';
const contentId = 'work';

const menu: Menu = [
  {
    fullLabel: 'About Matthew Walcher',
    icon: 'fa-user',
    label: 'About',
    link: `#${heroId}`,
  },
  {
    fullLabel: "Matthew Walcher's Work",
    icon: 'fa-desktop',
    label: 'Work',
    link: `#${contentId}`,
  },
  contactNav,
];

const tabContentList: TabContentProp = [
  {
    title: 'What I Use',
    list: [
      { icon: GitIcon, label: 'Git', link: 'https://git-scm.com/' },
      { icon: LaravelIcon, label: 'Laravel', link: 'https://laravel.com/' },
      { icon: ReactIcon, label: 'React', link: 'https://reactjs.org/' },
      { icon: VueIcon, label: 'Vue.js', link: 'https://vuejs.org/' },
    ],
  },
  {
    title: 'About Me',
    content: [
      `Welcome! I appreciate your interest, so allow me to introduce myself, I am Matthew Walcher and I am working as the web developer on the Marketing team at ${inlineLink(
        tophat,
        true,
      )}. Please enjoy this website that I designed to showcase my experience in front-end web development.`,
      `At ${inlineLink(tophat, true)} and in my previous role at ${inlineLink(
        arcane,
        true,
      )}, I have a reputation for the highest quality product because of my strong work ethic and attention to detail. From the beginning of a project I think through the desired outcome first before I start to build to ensure I have the optimal solution the first time. I love to collaborate and bounce ideas off my peers when working through tasks because I know I can benefit from other perspectives on how to create the best products for our team and clients.`,
      'I stumbled into my passion for front-end web development through my love for art and design. Art was always my favourite subject and in my teens I began to dabble in photography and photoshop, which lead to an interest in graphic design. I taught myself basic HTML and CSS because I wanted to design my own custom layouts on Neopets, a popular virtual pets site. I went on to study graphic design and web development as part of a collaborative diploma and degree program between Western University and Fanshawe College. Going into the program I wanted to be a graphic designer, but quickly realized my natural talent and passion was in web development. I excelled in our coding courses and was often helping my peers with the assignments (and they would give me new ideas for my designs).',
      `I hope you enjoy the examples of my front-end in my portfolio plus the design of this website. I enjoyed designing this website because I get to practice design and highlight some of my proudest front-end achievements. I would love to hear what you think, and talk to you more about web development. You can contact me through the ${inlineLink(
        { ...contactNav, label: 'form' },
      )} below.`,
    ],
  },
];
</script>

<template>
  <div class="fixedBackground" :style="{ backgroundImage: `url(${HomeHeroBg})` }"></div>
  <Header :menu="menu" />
  <main>
    <Hero
      :id="heroId"
      pageTitle="Matthew Walcher"
      subTitle="Front-end Web Developer"
      content="Experienced and passionate about front-end web development. I am a
        detail-oriented problem solver
        with&nbsp;an&nbsp;eye&nbsp;for&nbsp;design."
      buttonText="Get in touch"
      :buttonLabel="contactNav.fullLabel"
      :buttonLink="contactNav.link"
      :tabContentList="tabContentList"
    />
    <MainContent :id="contentId" sectionTitle="Projects">
      <FeaturedProject :projects="projects" />
    </MainContent>
  </main>
  <Footer />
</template>
