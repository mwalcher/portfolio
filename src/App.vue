<script setup lang="ts">
  import Hero from './components/Hero.vue'
</script>

<template>
  <div
    class="fixed-background"
    style="background-image: url('src/assets/images/home-hero.jpg')"
  ></div>
  <main>
    <Hero />
  </main>
</template>

<style lang="scss" module>
  h1 {
    text-align: center;
  }
</style>
