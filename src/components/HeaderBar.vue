<script setup lang="ts">
import HeaderLogo from '@/components/header/HeaderLogo.vue';
import HeaderNavigation from '@/components/header/HeaderNavigation.vue';
import MobileMenuToggle from '@/components/header/MobileMenuToggle.vue';
import type { Menu } from '@/types/navigation';
import useHeader from '@/composables/useHeader';

defineProps<{
  menu: Menu;
}>();

useHeader();

const openNavigationClass = 'showNavigation';

function toggleNavigation() {
  const page = window.document.documentElement;
  page.classList.toggle(openNavigationClass);
}
</script>

<template>
  <header :class="$style.header">
    <HeaderLogo />
    <MobileMenuToggle :toggleNavigation="toggleNavigation" />
    <HeaderNavigation :menu="menu" :toggleNavigation="toggleNavigation" />
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
