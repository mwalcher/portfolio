<script setup lang="ts">
import Logo from '@/assets/images/mwalcher-logo.svg?component';
import { homeNav } from '@/constants/navigation';
</script>

<template>
  <RouterLink
    id="headerLogo"
    :to="{ name: homeNav.link }"
    :class="$style.logo"
    :aria-label="homeNav.fullLabel"
  >
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
