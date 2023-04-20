<script setup lang="ts">
import HeaderLogo from './header/HeaderLogo.vue';
import HeaderNavigation from './header/HeaderNavigation.vue';
import MobileMenuToggle from './header/MobileMenuToggle.vue';
import type { Menu } from '@/types/navigation';

defineProps<{
  menu: Menu;
}>();
</script>

<template>
  <header :class="$style.header">
    <HeaderLogo />
    <MobileMenuToggle />
    <HeaderNavigation :menu="menu" />
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
</style>
