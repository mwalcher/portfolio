<script setup lang="ts">
import { useDebounceFn } from '@vueuse/core';
import Flickity from 'flickity';
import { onMounted, onUnmounted, ref } from 'vue';

const props = defineProps<{
  options?: Record<string, unknown>;
}>();

const root = ref<HTMLElement | null>(null);
let flickity: typeof Flickity | null = null;

function initFlickity() {
  flickity = new Flickity(root.value as HTMLElement, props.options);
  flickity?.resize();
}

function resizeFlickity() {
  useDebounceFn(() => initFlickity(), 250);
}

onMounted(() => {
  setTimeout(() => {
    initFlickity();
    window.addEventListener('resize', resizeFlickity);
  }, 50);
});

onUnmounted(() => {
  flickity?.destroy();
  window.removeEventListener('resize', resizeFlickity);
});
</script>

<template>
  <div ref="root">
    <slot />
  </div>
</template>
