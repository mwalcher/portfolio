<script setup lang="ts">
import ProjectPage from '@/components/ProjectPage.vue';
import { pinkPrecast } from '@/constants/projects';
</script>

<template>
  <ProjectPage :projectKey="pinkPrecast.key" />
</template>
