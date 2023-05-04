<script setup lang="ts">
import type { ProjectsList } from '@/types/projects';
withDefaults(
  defineProps<{
    projects: ProjectsList;
    title?: string;
    toggle?: boolean;
  }>(),
  {
    toggle: false,
  },
);
</script>

<template>
  <h2 v-if="title">{{ title }}</h2>

  <ul :class="$style.projectList">
    <li
      v-for="(project, index) in projects"
      :key="project.key"
      :class="[$style.project, project.key, { [$style.active]: toggle && index === 0 }]"
      :disabled="!!project.disabled || undefined"
    >
      <RouterLink
        v-if="!toggle"
        :to="{ name: project.key }"
        :class="$style.projectLink"
        :aria-label="project.name"
      />

      <div class="absolute-background" :style="{ backgroundImage: `url(${project.image})` }"></div>
      <div :class="$style.content">
        <h3 v-if="project.disabled">
          <span class="invisible">{{ project.name }} </span>(Coming Soon)
        </h3>
        <h3 v-else>{{ project.name }}</h3>
      </div>
    </li>
  </ul>
</template>

<style lang="scss" module>
.projectList {
  @include spacing(margin, top, 1.5rem);

  @media screen and (min-width: $laptop-breakpoint) {
    display: flex;
    justify-content: center;
  }

  .project {
    position: relative;
    @include set-background-colour($black);
    @include transition(background-color);
    overflow: hidden;
    z-index: 0;
    cursor: pointer;

    @media screen and (min-width: $laptop-breakpoint) {
      width: 25%;
      @include spacing(padding, bottom, 25%);
    }

    & ~ .project {
      @include spacing(margin, top, 0.75rem);

      @media screen and (min-width: $laptop-breakpoint) {
        @include spacing(margin, top, 0);
      }
    }

    &:hover,
    &:focus {
      @each $project, $colour in $project-colours {
        &:global(.#{$project}) {
          @include set-background-colour(darken($colour, 10%));
        }
      }
    }

    &[disabled] {
      @include set-background-colour($black, $disabled-background-colour);

      :global(.absolute-background) {
        filter: grayscale(100%);
        opacity: 0.2;
      }
    }

    &.active {
      @each $project, $colour in $project-colours {
        &:global(.#{$project}) {
          @include set-background-colour($colour);

          .content {
            @media screen and (min-width: $laptop-breakpoint) {
              bottom: -$large-size;
            }
          }
        }
      }
    }

    .projectLink {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }

    .content {
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 6.25rem;
      @include spacing(padding, all, md);

      @media screen and (min-width: $laptop-breakpoint) {
        display: block;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        min-height: 0;
        @include spacing(padding, top bottom, sm);
        @include spacing(padding, left right, 0);
        @include transition(bottom);
      }

      h3 {
        @media screen and (min-width: $laptop-breakpoint) {
          @include set-font(body, bold);
          font-size: 0.9rem;
          line-height: 1;
        }

        @media screen and (min-width: $desktop-breakpoint) {
          font-size: $global-font-size;
        }
      }
    }
  }
}
</style>
