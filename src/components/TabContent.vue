<script setup lang="ts">
import type { TabContentProp } from '@/@types/components';
import InteractiveIcons from '@/components/InteractiveIcons.vue';
defineProps<{
  tabContentList: TabContentProp;
}>();
const toggleParent = 'tab-content';
</script>

<template>
  <div :class="$style.tabContent">
    <div :class="$style.tabContainer">
      <button
        v-for="(item, index) in tabContentList"
        :key="item.title"
        type="button"
        :class="[$style.tab, index === 0 && $style.active]"
        :data-parent="toggleParent"
        :data-toggle="item.title"
        :aria-label="item.title"
      >
        {{ item.title }}
      </button>
    </div>
    <div :class="$style.tabContentContainer">
      <div
        v-for="(item, index) in tabContentList"
        :key="item.title"
        :class="[$style.contentContainer, index === 0 && $style.active]"
        :data-parent="toggleParent"
        :data-toggle-content="item.title"
      >
        <div :class="[$style.content, !!item.list && $style.noScroll]">
          <h2 class="invisible">{{ item.title }}</h2>
          <p v-for="text in item.content" :key="text">{{ text }}</p>
          <InteractiveIcons v-if="item.list" :icon-list="item.list" />
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss" module>
.tabContent {
  display: block;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: $tab-content-height-mobile;
  transform: translateY(-50%);
  z-index: 5;
  @include spacing(padding, left right, 0.75rem);

  @media screen and (min-width: $phone-breakpoint) {
    height: $tab-content-height;
  }

  @media screen and (min-width: $header-breakpoint) {
    @include spacing(padding, left, 9.25rem);
  }

  @media screen and (min-width: $laptop-breakpoint) {
    @include spacing(padding, left right, 12rem);
  }

  .tabContainer {
    display: flex;
    align-items: flex-end;
    position: absolute;
    top: $global-border-width;
    left: 0;
    width: 100%;
    transform: translateY(-100%);
    @include spacing(padding, left right, 0.75rem);

    @media screen and (min-width: $header-breakpoint) {
      @include spacing(padding, left, 9.25rem);
    }

    @media screen and (min-width: $laptop-breakpoint) {
      @include spacing(padding, left right, 12rem);
    }

    .tab {
      display: block;
      width: 100%;
      min-height: $tab-content-tab-active-height * 0.75;
      @include title-font;
      font-size: $global-font-size;
      line-height: 1.25;
      text-align: center;
      @include set-background-colour($black);
      border: $global-border-width solid $white;
      @include spacing(padding, top bottom, xs);
      border-bottom: 0;
      border-radius: 0;
      outline: none;
      cursor: pointer;
      @include transition(min-height color background-color);

      &:first-child {
        border-right: 0;
      }

      &:last-child {
        border-left: 0;
      }

      &:hover,
      &:focus,
      &.active {
        min-height: $tab-content-tab-active-height;
      }

      &:hover,
      &:focus {
        @include set-background-colour($primary-rgba-dark);
      }

      &.active {
        @include set-background-colour($white);
        pointer-events: none;
      }
    }
  }

  .tabContentContainer {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
    @include set-background-colour($white);
    box-shadow: $global-shadow;
    overflow: hidden;

    .contentContainer {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      align-items: center;
      width: 100%;
      height: 100%;
      @include spacing(padding, all, 1.5rem);
      @include transition(transform);

      @media screen and (min-width: $laptop-breakpoint) {
        @include spacing(padding, left right, md);
      }

      &:first-child {
        transform: translateX(-200%);
      }

      &:last-child {
        transform: translateX(200%);
      }

      &.active {
        transform: translateX(0);
      }

      .content {
        height: 100%;
        overflow: auto;

        &.noScroll {
          overflow: hidden;
        }
      }
    }
  }
}

body {
  @each $project, $colour in $project-colours {
    &.#{$project} {
      .tabContent {
        .tabContainer {
          .tab {
            &:hover:not(.active),
            &:focus:not(.active) {
              @include set-background-colour(rgba($colour, 0.75));
            }
          }
        }
      }
    }
  }
}
</style>
