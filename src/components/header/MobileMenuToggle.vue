<script setup lang="ts">
defineProps<{
  toggleNavigation: () => void;
}>();
</script>

<template>
  <button
    type="button"
    :class="$style.mobileMenuToggle"
    aria-label="Mobile Navigation Toggle"
    @click="toggleNavigation"
  >
    <span :class="$style.icon">
      <span></span>
      <span></span>
      <span></span>
    </span>
  </button>
</template>

<style lang="scss" module>
.mobileMenuToggle {
  position: relative;
  display: block;
  width: 3.4375rem;
  height: 3.4375rem;
  background-color: $white-off;
  border-radius: 100%;
  outline: none;
  cursor: pointer;

  @media screen and (min-width: $header-breakpoint) {
    display: none;
  }

  .icon {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1.5rem;
    height: 1.5rem;
    @include transition(width);

    span {
      display: block;
      width: 1.5rem;
      height: 0.25rem;
      background-color: $black;
      border-radius: $global-border-radius;

      &:nth-child(1) {
        transform: rotate(0);
        transform-origin: top left;
        @include transition(width transform);
      }

      &:nth-child(2) {
        opacity: 1;
        @include transition(opacity);
      }

      &:nth-child(3) {
        transform: rotate(0);
        transform-origin: bottom left;
        @include transition(width transform);
      }
    }
  }

  :global(.showNavigation) & {
    .icon {
      width: 1.22rem;

      span {
        &:nth-child(1) {
          transform: rotate(45deg) scaleX(1.3);
        }

        &:nth-child(2) {
          opacity: 0;
        }

        &:nth-child(3) {
          transform: rotate(-45deg) scaleX(1.3);
        }
      }
    }
  }
}
</style>
