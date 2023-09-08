<script setup lang="ts">
import HomeHeroBg from '@/assets/images/home-hero.jpg';
import Hero from '@/components/HeroSection.vue';
import { titleTemplate } from '@/constants/metaData';
import { homeNav } from '@/constants/navigation';
import { useSeoMeta } from '@unhead/vue';

useSeoMeta({
  title: titleTemplate('Page Not Found'),
  robots: 'noindex',
});
</script>

<template>
  <div class="fixedBackground" :style="{ backgroundImage: `url(${HomeHeroBg})` }"></div>
  <main>
    <Hero
      pageTitle="No worries!"
      content="Not all those who wander are lost."
      :buttonText="homeNav.label"
      :buttonLabel="homeNav.fullLabel"
      :buttonLink="homeNav.link"
      :simpleLayout="true"
    />
  </main>
</template>
