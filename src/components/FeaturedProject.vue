<script setup lang="ts">
import { projects } from '@/constants/projects';
import type { ProjectsList } from '@/types/projects';
import { ref } from 'vue';
defineProps<{
  projects: ProjectsList;
}>();

const selectedProject = ref(projects[0]);
</script>

<template>
  <div :class="[selectedProject.key]">
    <div
      class="absolute-background"
      :style="{ backgroundImage: `url(${selectedProject.image})` }"
    ></div>
    <div class="content">
      <p class="title">{{ selectedProject.name }}</p>
      <p class="description">{{ selectedProject.description }}</p>
      <RouterLink
        :to="{ name: selectedProject.key }"
        class="button"
        :title="`View ${selectedProject.name}`"
        :disabled="!!selectedProject.disabled || undefined"
      >
        {{ !!selectedProject.disabled ? 'Coming Soon' : 'View Project' }}
      </RouterLink>
    </div>
  </div>
</template>

<style lang="scss" module></style>
