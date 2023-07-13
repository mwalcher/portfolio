<script setup lang="ts">
import Flickity from '@/components/FlickitySlider.vue';
import type { IsProject } from '@/types/projects';
import { computed } from 'vue';

const props = withDefaults(
  defineProps<{
    projectImages?: IsProject['sliderImages'];
    projectLink?: IsProject['website'];
    projectName?: IsProject['name'];
  }>(),
  {
    projectName: 'Project',
  },
);

const flickityOptions = {
  prevNextButtons: true,
  pageDots: false,
  draggable: true,
  adaptiveHeight: true,
  wrapAround: true,
};
const buttonLabel = computed(() => `View ${props.projectName}`);
const showSlider = computed(() => props.projectImages && props.projectImages.length);
</script>

<template>
  <div v-if="showSlider || projectLink" :class="$style['showcaseSliderContainer']">
    <a v-if="projectLink" :href="projectLink" target="_blank" rel="noopener" class="button center">
      {{ buttonLabel }}
    </a>
    <Flickity v-if="showSlider" :class="$style['showcaseSlider']" :options="flickityOptions">
      <div v-for="(images, index) in projectImages" :key="`${projectName}-${index}`" class="slide">
        <img :src="images.src" :alt="images.alt" />
      </div>
    </Flickity>
  </div>
</template>

<style lang="scss" module>
.showcaseSliderContainer {
  padding-bottom: 4.5rem;

  .showcaseSlider {
    position: relative;
    @include spacing(padding, top bottom, 5.5rem);
    @include spacing(margin, top, md);
    opacity: 0;
    @include transition(opacity);

    @media screen and (min-width: $phone-breakpoint) {
      @include spacing(padding, left right, 5.5rem);
      @include spacing(padding, top bottom, 0);
    }

    &:focus {
      outline: none;
    }

    &:global(.flickity-enabled) {
      opacity: 1;
    }

    :global(.flickity-viewport) {
      height: 100%;
      overflow: hidden;
      @include transition(height);

      :global(.flickity-slider) {
        height: 100%;

        :global(.slide) {
          width: 100%;

          img {
            display: block;
            max-height: 50vh;
            @include spacing(margin, left right, auto);

            @media screen and (min-width: $phone-breakpoint) {
              max-height: 75vh;
            }
          }
        }
      }
    }

    :global(.flickity-prev-next-button) {
      position: absolute;
      left: 50%;
      width: 0;
      height: 0;
      border: 2.75rem solid transparent;
      border-top: 0;
      border-bottom: 4.625rem solid $black-rgba;
      border-radius: $global-border-radius;
      background-color: transparent;
      cursor: pointer;
      @include transition(border-color);

      @media screen and (min-width: $phone-breakpoint) {
        left: auto;
        top: 50%;
      }

      &:hover,
      &:focus {
        outline: none;
        border-bottom-color: $primary-rgba-dark;
      }

      &::before {
        @include set-font(body);
        color: $white-off;
        font-size: 0.85rem;
        text-align: center;
        word-spacing: 5.5rem;

        position: absolute;
        bottom: 0;
        left: 0;
        transform: translate(-50%, 4rem);
      }

      &:global(.previous) {
        top: 0;
        transform: translateX(-50%) rotateZ(0);

        @media screen and (min-width: $phone-breakpoint) {
          left: -0.375rem;
          top: 50%;
          transform: translateY(-50%) rotateZ(-90deg);
        }

        &::before {
          content: 'Back';

          @media screen and (min-width: $phone-breakpoint) {
            transform: translate(-50%, 3.5rem) rotateZ(90deg);
          }
        }
      }

      &:global(.next) {
        bottom: 0;
        transform: translateX(-50%) rotateZ(180deg);

        @media screen and (min-width: $phone-breakpoint) {
          right: -0.375rem;
          bottom: auto;
          transform: translateY(-50%) rotateZ(90deg);
        }

        &::before {
          content: 'Next';
          transform: translate(-50%, 4rem) rotateZ(180deg);

          @media screen and (min-width: $phone-breakpoint) {
            transform: translate(-50%, 3.5rem) rotateZ(-90deg);
          }
        }
      }

      svg {
        display: none;
      }
    }
  }
}

@each $project, $colour in $project-colours {
  body:global(.#{$project}) {
    $primary: $colour;
    $primary-rgba-dark: rgba($primary, 0.75);
    .showcaseSliderContainer {
      .showcaseSlider {
        :global(.flickity-prev-next-button) {
          &:hover,
          &:focus {
            border-bottom-color: $primary-rgba-dark;
          }
        }
      }
    }
  }
}
</style>
