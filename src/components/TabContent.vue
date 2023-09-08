<script setup lang="ts">
import InteractiveIcons from '@/components/InteractiveIcons.vue';
import type { TabContentProp } from '@/types/components';
import { ref } from 'vue';

defineProps<{
  tabContentList: TabContentProp;
}>();

let activeSectionIndex = ref(0);

const isActiveSection = (index: number) => index === activeSectionIndex.value;
const toggleActiveSection = (index: number) => {
  activeSectionIndex.value = index;
};
</script>

<template>
  <div :class="$style.tabContent" data-tab-content>
    <div :class="$style.tabContainer">
      <button
        v-for="(section, index) in tabContentList"
        :key="section.title"
        type="button"
        :class="[$style.tab, { [$style.active]: isActiveSection(index) }]"
        @click="() => toggleActiveSection(index)"
      >
        {{ section.title }}
      </button>
    </div>
    <div :class="$style.tabContentContainer">
      <div
        v-for="(section, index) in tabContentList"
        :key="section.title"
        :class="[$style.contentContainer, { [$style.active]: isActiveSection(index) }]"
      >
        <div :class="[$style.content, !!section.list && $style.noScroll]">
          <h2 class="invisible">{{ section.title }}</h2>
          <p v-for="(text, index) in section.content" :key="index" v-html="text" />
          <InteractiveIcons v-if="section.list" :icon-list="section.list" />
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

@each $project, $colour in $project-colours {
  body:global(.#{$project}) {
    $primary: $colour;
    $primary-rgba-dark: rgba($primary, 0.75);
    .tabContent {
      .tabContainer {
        .tab {
          &:hover:not(.active),
          &:focus:not(.active) {
            @include set-background-colour($primary-rgba-dark);
          }
        }
      }
    }
  }
}
</style>
