<script setup lang="ts">
import Logo from '@/assets/images/mwalcher-logo.svg?component';
import { homeNav } from '@/constants/navigation';
</script>

<template>
  <RouterLink :to="{ name: homeNav.link }" :class="$style.logo" :aria-label="homeNav.fullLabel">
    <span :class="$style.logoContainer">
      <Logo />
    </span>
  </RouterLink>
</template>

<style lang="scss" module>
a.logo {
  display: block;

  &:global(.dark) {
    .logoContainer {
      svg {
        @media screen and (min-width: $header-breakpoint) {
          fill: $black;
        }
      }
    }
  }

  &:hover,
  &:focus {
    .logoContainer {
      svg {
        fill: $primary-rgba-dark;
      }
    }
  }

  .logoContainer {
    display: block;

    svg {
      display: block;
      fill: $white-off;
      @include transition(fill);
    }
  }
}

@each $project, $colour in $project-colours {
  body:global(.#{$project}) {
    $primary: $colour;
    $primary-rgba-dark: rgba($primary, 0.75);
    a.logo {
      &:hover,
      &:focus {
        .logoContainer {
          svg {
            fill: $primary-rgba-dark;
          }
        }
      }
    }
  }
}
</style>
