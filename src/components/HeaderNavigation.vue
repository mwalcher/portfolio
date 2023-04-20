<script setup lang="ts">
import Logo from '@/assets/images/mwalcher-logo.svg?component';
</script>

<template>
  <header :class="$style.header">
    <RouterLink :to="{ name: 'home' }" :class="$style.logo" aria-label="Homepage">
      <span :class="$style.logoContainer">
        <Logo />
      </span>
    </RouterLink>
  </header>
</template>

<style lang="scss" module>
.header {
  display: flex;
  justify-content: space-between;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: $header-height;
  @include spacing(padding, all, 0.75rem);
  background-color: $black;
  border-bottom: $global-border-width solid $white-off;
  box-shadow: $global-shadow;
  z-index: 10;

  @media screen and (min-width: $header-breakpoint) {
    display: block;
    width: 8.5rem;
    height: 100%;
    background-color: transparent;
    border-bottom: 0;
    box-shadow: none;
  }
}

.logo {
  display: block;

  &:hover,
  &:focus {
    .logoContainer {
      svg {
        fill: $primary-rgba-dark;
      }
    }
  }

  &.dark {
    .logoContainer {
      svg {
        @media screen and (min-width: $header-breakpoint) {
          fill: $black;
        }
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
