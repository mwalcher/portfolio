<script setup lang="ts">
import TabContent from '@/components/TabContent.vue';
import HeaderLogo from '@/components/header/HeaderLogo.vue';
import { githubContact, linkedinContact } from '@/constants/navigation';
import { isAnchorLink, scrollToElement } from '@/helpers';
import type { TabContentProp } from '@/types/components';
import type { IsMenuItem, Menu } from '@/types/navigation';

withDefaults(
  defineProps<{
    buttonLabel?: string;
    buttonLink?: string;
    buttonText?: string;
    content?: string;
    pageTitle?: string;
    subTitle?: string;
    simpleLayout: boolean;
    tabContentList?: TabContentProp;
  }>(),
  {
    simpleLayout: false,
  },
);

const contactLinks: Menu = [githubContact, linkedinContact];

const scrollToSection = (sectionId?: IsMenuItem['link']) => {
  if (!sectionId) return;
  const section = document.querySelector(sectionId);

  if (section) {
    scrollToElement(section);
  }
};
</script>

<template>
  <section class="section" :class="[$style.hero, tabContentList && $style.heroTabContent]">
    <div :class="$style.heroContent">
      <HeaderLogo v-if="simpleLayout" :class="$style['logo']" />
      <h1 v-if="pageTitle">{{ pageTitle }}</h1>
      <p v-if="subTitle" :class="$style.subTitle">{{ subTitle }}</p>
      <p v-if="content" :class="$style.content">{{ content }}</p>
      <button
        v-if="buttonLink && buttonText && isAnchorLink(buttonLink)"
        class="button center"
        :class="$style.cta"
        :aria-label="buttonLabel"
        @click="() => scrollToSection(buttonLink)"
      >
        {{ buttonText }}
      </button>
      <RouterLink
        v-else-if="buttonLink && buttonText"
        :to="{ name: buttonLink }"
        class="button center"
        :class="$style.cta"
        :aria-label="buttonLabel"
      >
        {{ buttonText }}
      </RouterLink>

      <div v-if="simpleLayout" :class="$style['contact-links']">
        <a
          v-for="contactItem in contactLinks"
          :key="contactItem.label"
          :href="contactItem.link"
          target="_blank"
          rel="noopener"
          :aria-label="contactItem.fullLabel"
        >
          <span class="fa" :class="[contactItem.icon, $style.icon]" :aria-hidden="true" />
          <span>{{ contactItem.label }}</span>
        </a>
      </div>
    </div>

    <TabContent v-if="tabContentList" :tabContentList="tabContentList" />
  </section>
</template>

<style lang="scss" module>
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

    .logo {
      max-width: 12.5rem;
      @include spacing(margin, left right, auto);
      @include spacing(margin, bottom, md);
    }

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

    .contact-links {
      display: flex;
      align-items: center;
      justify-content: center;
      @include spacing(padding, top, sm);
      @include spacing(margin, left right, auto);

      a {
        color: $white-off;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        &:hover,
        &:focus {
          .icon {
            color: $primary;
          }
        }

        & ~ a {
          @include spacing(margin, left, md);
        }

        .icon {
          display: block;
          color: $white-off;
          font-size: 2.5rem;
          @include spacing(padding, bottom, 0.5rem);
          @include transition(color);
        }
      }
    }
  }
}
</style>
