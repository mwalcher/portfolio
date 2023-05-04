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
  <div :class="[$style.featuredProject, selectedProject.key]">
    <div
      class="absolute-background"
      :style="{ backgroundImage: `url(${selectedProject.image})` }"
    ></div>
    <div :class="$style.content">
      <p :class="$style.title">{{ selectedProject.name }}</p>
      <p :class="$style.description">{{ selectedProject.description }}</p>
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

<style lang="scss" module>
.featuredProject {
  position: relative;
  width: 100%;
  @include set-background-colour($black);
  z-index: 1;

  @each $project, $colour in $project-colours {
    &:global(.#{$project}) {
      :global(.button) {
        @include button-colour(set-colour($black, $button-light, $button-dark));
        &::after {
          background-color: rgba($colour, 0.5);
        }
      }
    }
  }

  .content {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 45vh;
    min-height: 50vh;
    @include spacing(padding, all, md);

    .title {
      @include h2;
      font-size: 1.75rem;
      @include spacing(padding, bottom, 0);

      @media screen and (min-width: $phone-breakpoint) {
        font-size: 2rem;
      }
    }

    .description {
      max-width: 14rem;
    }
  }
}
</style>
