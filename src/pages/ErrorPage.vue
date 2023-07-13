<script setup lang="ts">
import HomeHeroBg from '@/assets/images/home-hero.jpg';
import Hero from '@/components/HeroSection.vue';
import { homeNav } from '@/constants/navigation';
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
