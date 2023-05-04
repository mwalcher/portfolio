<script setup lang="ts">
defineProps<{
  sectionTitle?: string;
}>();
</script>

<template>
  <section class="section light-section" :class="[$style.mainContent]">
    <h2 v-if="sectionTitle">{{ sectionTitle }}</h2>
  </section>
</template>

<style lang="scss" module>
.mainContent {
  text-align: center;
  @include spacing(padding, top, $tab-content-bottom-space-mobile);
  @include spacing(padding, bottom, lg);

  @media screen and (min-width: $phone-breakpoint) {
    @include spacing(padding, top, $tab-content-bottom-space);
  }

  h2 {
    @include spacing(margin, bottom, md);
  }
}
</style>
