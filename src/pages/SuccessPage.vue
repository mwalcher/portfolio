<script setup lang="ts">
import HomeHeroBg from '@/assets/images/home-hero.jpg';
import Hero from '@/components/HeroSection.vue';
import { homeNav } from '@/constants/navigation';
</script>

<template>
  <div class="fixedBackground" :style="{ backgroundImage: `url(${HomeHeroBg})` }"></div>
  <main>
    <Hero
      pageTitle="Thank you!"
      content="I appreciate you taking the time to reach out to me. I will be sure to respond to your message as soon as possible."
      :buttonText="homeNav.label"
      :buttonLabel="homeNav.fullLabel"
      :buttonLink="homeNav.link"
      :simpleLayout="true"
    />
  </main>
</template>
