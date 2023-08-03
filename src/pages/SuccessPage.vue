<script setup lang="ts">
import HomeHeroBg from '@/assets/images/home-hero.jpg';
import Hero from '@/components/HeroSection.vue';
import { homeNav } from '@/constants/navigation';
import { useRoute } from 'vue-router';

const currentRoute = useRoute();
const { name } = currentRoute.query;
const pageTitle = name ? `Thank you, ${name}!` : 'Thank you!';
</script>

<template>
  <div class="fixedBackground" :style="{ backgroundImage: `url(${HomeHeroBg})` }"></div>
  <main>
    <Hero
      :pageTitle="pageTitle"
      content="I appreciate you taking the time to reach out to me. I will be sure to respond to your message as soon as possible."
      :buttonText="homeNav.label"
      :buttonLabel="homeNav.fullLabel"
      :buttonLink="homeNav.link"
      :simpleLayout="true"
    />
  </main>
</template>
