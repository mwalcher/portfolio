<script setup lang="ts">
import Hero from '@/components/HeroSection.vue';
import HomeHeroBg from '@/assets/images/home-hero.jpg';

const tabContentList = [
  {
    title: 'What I Use',
    list: [
      { key: 'git', label: 'Git', link: 'https://git-scm.com/' },
      { key: 'laravel', label: 'Laravel', link: 'https://laravel.com/' },
      { key: 'react', label: 'React', link: 'https://reactjs.org/' },
      { key: 'vue-js', label: 'Vue.js', link: 'https://vuejs.org/' },
    ],
  },
  {
    title: 'About Me',
    content: ['Test Content'],
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
