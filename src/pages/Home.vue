<script setup lang="ts">
  import Hero from '../components/Hero.vue'
</script>

<template>
  <div
    class="fixed-background"
    style="background-image: url('src/assets/images/home-hero.jpg')"
  ></div>
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
    />
  </main>
</template>
