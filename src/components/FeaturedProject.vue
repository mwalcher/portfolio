<script setup lang="ts">
import ProjectList from '@/components/ProjectList.vue';
import { disabledProjectLabel, projects } from '@/constants/projects';
import type { Project, ProjectsList } from '@/types/projects';
import { ref, type Ref } from 'vue';

defineProps<{
  projects: ProjectsList;
}>();

const featuredProject: Ref<Project> = ref(projects[0]);
const projectSpotlight: Ref<HTMLElement | null> = ref(null);

function toggleProject(key: Project['key']) {
  const selectedProject = projects.find((project) => project.key === key);
  if (selectedProject) {
    featuredProject.value = selectedProject;
    if (projectSpotlight.value) {
      projectSpotlight.value.scrollIntoView({ behavior: 'smooth' });
    }
  }
}
</script>

<template>
  <div ref="projectSpotlight" :class="[$style.featuredProject, featuredProject.key]">
    <div
      class="absoluteBackground"
      :style="{ backgroundImage: `url(${featuredProject.image})` }"
    ></div>
    <div :class="$style.content">
      <p :class="$style.title">{{ featuredProject.name }}</p>
      <p :class="$style.description">{{ featuredProject.description }}</p>
      <RouterLink
        :to="{ name: featuredProject.key }"
        class="button"
        :title="`View ${featuredProject.name}`"
        :disabled="!!featuredProject.disabled || undefined"
      >
        {{ !!featuredProject.disabled ? disabledProjectLabel : 'View Project' }}
      </RouterLink>
    </div>
  </div>

  <ProjectList
    :projects="projects"
    :activeKey="featuredProject.key"
    :toggleProject="toggleProject"
  />
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
