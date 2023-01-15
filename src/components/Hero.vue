<script setup lang="ts">
  import { TabContentProp } from '../@types/components'
  import TabContent from './TabContent.vue'
  defineProps<{
    buttonLabel?: string
    buttonLink?: string
    buttonText?: string
    content?: string
    pageTitle?: string
    subTitle?: string
    tabContentList?: TabContentProp
  }>()
</script>

<template>
  <section
    class="section"
    :class="[$style.hero, tabContentList && $style.heroTabContent]"
  >
    <div :class="$style.heroContent">
      <h1 v-if="pageTitle">{{ pageTitle }}</h1>
      <p v-if="subTitle" :class="$style.subTitle">{{ subTitle }}</p>
      <p v-if="content" :class="$style.content">{{ content }}</p>
      <a
        v-if="buttonLink && buttonText"
        :href="buttonLink"
        class="button center"
        :class="$style.cta"
        :aria-label="buttonLabel"
      >
        {{ buttonText }}
      </a>
    </div>

    <TabContent v-if="tabContentList" :tabContentList="tabContentList" />
  </section>
</template>

<style lang="scss" module>
  @import '../assets/styles/base/variables';
  @import '../assets/styles/base/mixins';
  .hero {
    display: flex;
    align-items: center;
    justify-content: center;

    &::after {
      content: '';
      display: block;
      min-height: inherit;
    }

    &.heroTabContent {
      @include spacing(padding, bottom, $tab-content-top-space-mobile);

      @media screen and (min-width: $phone-breakpoint) {
        @include spacing(padding, bottom, $tab-content-top-space);
      }

      &::after {
        min-height: 0;
        height: calc(100vh - #{$tab-content-top-space-mobile});

        @media screen and (min-width: $phone-breakpoint) {
          height: calc(100vh - #{$tab-content-top-space});
        }
      }
    }

    .heroContent {
      text-align: center;
      @include spacing(padding, top bottom, md);

      .subTitle {
        @include h2;
        @include set-font(body, bold);
        letter-spacing: 0;
        @include spacing(padding, bottom, 0.5rem);
      }

      .content {
        max-width: 28rem;
        @include spacing(padding, bottom, 0);
        @include spacing(margin, left right, auto);
      }

      .cta {
        @include spacing(margin, top, 1.5rem);
      }
    }
  }
</style>
