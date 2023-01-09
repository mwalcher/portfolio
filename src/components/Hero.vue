<script setup lang="ts"></script>

<template>
  <section
    id="about"
    class="section"
    :class="[$style.hero, $style['hero-tab-content']]"
  >
    <div :class="$style['hero-content']">
      <h1>Matthew Walcher</h1>
      <p :class="$style['sub-title']">Front-end Web Developer</p>
      <p :class="$style.content">
        Experienced and passionate about front-end web development. I am a
        detail-oriented problem solver
        with&nbsp;an&nbsp;eye&nbsp;for&nbsp;design.
      </p>
      <a
        href="#contact"
        class="button center"
        :class="$style.button"
        aria-label="Contact Matthew Walcher"
      >
        Get in touch
      </a>
    </div>
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

    &.hero-tab-content {
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

    .hero-content {
      text-align: center;
      @include spacing(padding, top bottom, md);

      .sub-title {
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

      .button {
        @include spacing(margin, top, 1.5rem);
      }
    }
  }
</style>
