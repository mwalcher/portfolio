<script setup lang="ts">
import ProjectPage from '@/components/ProjectPage.vue';
import { whatsMy } from '@/constants/projects';
</script>

<template>
  <ProjectPage :projectKey="whatsMy.key" />
</template>
