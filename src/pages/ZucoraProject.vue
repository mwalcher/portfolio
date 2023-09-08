<script setup lang="ts">
import ProjectPage from '@/components/ProjectPage.vue';
import { zucora } from '@/constants/projects';
</script>

<template>
  <ProjectPage :projectKey="zucora.key" />
</template>
