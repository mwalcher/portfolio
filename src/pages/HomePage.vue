<script setup lang="ts">
import Hero from '@/components/HeroSection.vue';
import HomeHeroBg from '@/assets/images/home-hero.jpg';
import GitIcon from '@/assets/images/icon-git.svg';
import LaravelIcon from '@/assets/images/icon-laravel.svg';
import ReactIcon from '@/assets/images/icon-react.svg';
import VueIcon from '@/assets/images/icon-vue-js.svg';

const tabContentList = [
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
      'Welcome! I appreciate your interest, so allow me to introduce myself, I am Matthew Walcher and I am working as the web developer on the Marketing team at <a class="animated-hover" href="https://tophat.com/" target="_blank" rel="noopener" title="Top Hat Website">Top Hat</a>. Please enjoy this website that I designed to showcase my experience in front-end web development.',
    ],
  },
];
</script>

<template>
  <div class="fixed-background" :style="{ backgroundImage: `url(${HomeHeroBg})` }"></div>
  <main>
    <Hero
      id="about"
      pageTitle="Matthew Walcher"
      subTitle="Front-end Web Developer"
      content="Experienced and passionate about front-end web development. I am a
        detail-oriented problem solver
        with&nbsp;an&nbsp;eye&nbsp;for&nbsp;design."
      buttonText="Get in touch"
      buttonLabel="Contact Matthew Walcher"
      buttonLink="#contact"
      :tabContentList="tabContentList"
    />
  </main>
</template>
