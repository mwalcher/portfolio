<script setup lang="ts">
import Logo from '@/assets/images/mwalcher-logo.svg?component';
</script>

<template>
  <RouterLink :to="{ name: 'home' }" :class="$style.logo" aria-label="Homepage">
    <span :class="$style.logoContainer">
      <Logo />
    </span>
  </RouterLink>
</template>

<style lang="scss" module>
.logo {
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
    width: 6.125rem;
    height: 3.5rem;

    @media screen and (min-width: $header-breakpoint) {
      width: 7rem;
      height: 4rem;
    }

    svg {
      display: block;
      fill: $white-off;
      @include transition(fill);
    }
  }
}
</style>
