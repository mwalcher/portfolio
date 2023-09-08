<script setup lang="ts">
import ProjectPage from '@/components/ProjectPage.vue';
import { libro } from '@/constants/projects';
</script>

<template>
  <ProjectPage :projectKey="libro.key" />
</template>
