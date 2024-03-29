<script setup lang="ts">
import type { IsTabContentListItem } from '@/types/components';

defineProps<{
  iconList: IsTabContentListItem[];
}>();
</script>

<template>
  <div v-if="iconList" :class="$style.interactiveIcons">
    <div v-for="item in iconList" :key="item.label" :class="$style.iconContainer">
      <div :class="$style.shape">
        <div :class="$style.icon">
          <div :class="$style.image" :style="{ backgroundImage: `url(${item.icon})` }" />
        </div>
        <div :class="$style.label">
          <p>{{ item.label }}</p>
        </div>
      </div>
      <a
        v-if="item.link"
        :class="$style.iconLink"
        :href="item.link"
        target="_blank"
        rel="noopener"
        :aria-label="item.fullLabel"
      />
    </div>
  </div>
</template>

<style lang="scss" module>
$triangle-width: 8.25rem;
$triangle-height: 7.125rem;
$triangle-width-desktop: calc(($tab-content-height / 2) * 1.15);
$triangle-height-desktop: calc($tab-content-height / 2);
$image-height: calc(($triangle-width / 2) * 0.85);
$image-height-desktop: calc(($triangle-width-desktop / 2) * 0.85);

.interactiveIcons {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 100%;
  height: 100%;

  @media screen and (min-width: $phone-breakpoint) {
    flex-wrap: nowrap;
    align-items: center;
  }

  .iconContainer {
    position: relative;
    display: flex;
    align-items: center;
    flex: 1 1 50%;
    background-color: $black;
    border: calc($global-border-width * 2) solid $white-off;
    @include spacing(padding, left right, xs);

    @media screen and (min-width: $phone-breakpoint) {
      display: block;
      flex: 1 1 25%;
      width: $triangle-width;
      height: $triangle-height;
      perspective: 37.5rem;
      background-color: transparent;
      border: 0;
      @include spacing(padding, left right, 0);
    }

    @media screen and (min-width: $desktop-breakpoint) {
      width: $triangle-width-desktop;
      height: $triangle-height-desktop;
    }

    &:hover,
    &:focus {
      .shape {
        @media screen and (min-width: $phone-breakpoint) {
          transform: translate(-50%, -50%) rotateY(180deg);
        }

        .icon {
          .image {
            @media screen and (min-width: $phone-breakpoint) {
              opacity: 0;
            }
          }
        }
      }
    }

    &:nth-child(even) {
      .shape {
        @media screen and (min-width: $phone-breakpoint) {
          transform: translate(-50%, -50%) rotateY(0deg) rotateZ(180deg);
        }

        .icon {
          .image {
            @media screen and (min-width: $phone-breakpoint) {
              transform: translate(-50%, 90%) rotateZ(180deg);
            }
          }
        }

        .label {
          p {
            @media screen and (min-width: $phone-breakpoint) {
              transform: translate(-50%, 50%) rotateZ(180deg);
            }
          }
        }
      }

      &:hover,
      &:focus {
        .shape {
          @media screen and (min-width: $phone-breakpoint) {
            transform: translate(-50%, -50%) rotateY(180deg) rotateZ(180deg);
          }
        }
      }
    }

    .shape {
      width: 100%;

      @media screen and (min-width: $phone-breakpoint) {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border: calc($triangle-width / 2) solid transparent;
        border-top: 0;
        border-bottom-width: $triangle-height;
        transform-style: preserve-3d;
        transform: translate(-50%, -50%) rotateY(0deg);
        @include transition(transform);
      }

      @media screen and (min-width: $desktop-breakpoint) {
        border-width: calc($triangle-width-desktop / 2);
        border-bottom-width: $triangle-height-desktop;
      }

      .icon,
      .label {
        @include spacing(padding, top bottom, xs);

        @media screen and (min-width: $phone-breakpoint) {
          position: absolute;
          top: 0;
          left: calc(($triangle-width / 2) * -1);
          display: block;
          @include spacing(padding, top bottom, 0);
          border: calc($triangle-width / 2) solid transparent;
          border-top: 0;
          border-bottom-width: $triangle-height;
          backface-visibility: hidden;
        }

        @media screen and (min-width: $desktop-breakpoint) {
          left: calc(($triangle-width-desktop / 2) * -1);
          border-width: calc($triangle-width-desktop / 2);
          border-bottom-width: $triangle-height-desktop;
        }
      }

      .icon {
        @media screen and (min-width: $phone-breakpoint) {
          border-bottom-color: $black;
        }

        .image {
          width: 100%;
          height: $large-size;
          background-repeat: no-repeat;
          background-position: center;
          background-size: contain;

          @media screen and (min-width: $phone-breakpoint) {
            position: absolute;
            top: 0;
            left: 0;
            width: calc($triangle-width / 2);
            height: $image-height;
            transform: translate(-50%, 90%);
            background-size: cover;
            opacity: 1;
            @include transition(opacity);
          }

          @media screen and (min-width: $desktop-breakpoint) {
            width: calc($triangle-width-desktop / 2);
            height: $image-height-desktop;
          }
        }
      }

      .label {
        @media screen and (min-width: $phone-breakpoint) {
          border-bottom-color: $primary;
          transform: rotateY(180deg);
        }

        p {
          @include h3;
          @include set-font(body);
          color: $white-off;
          font-size: 0.85rem;
          letter-spacing: 0;
          text-align: center;
          word-spacing: $triangle-width;

          @media screen and (min-width: $phone-breakpoint) {
            position: absolute;
            top: calc($triangle-height / 2);
            left: 0;
            transform: translate(-50%, 50%);
          }

          @media screen and (min-width: $desktop-breakpoint) {
            font-size: calc($triangle-height-desktop / 10);
            top: calc($triangle-height-desktop / 2);
            word-spacing: $triangle-width-desktop;
          }
        }
      }
    }

    .iconLink {
      display: block;
      position: absolute;
      top: 0;
      left: 50%;
      width: 100%;
      height: 100%;
      transform: translateX(-50%);
      z-index: 1;

      @media screen and (min-width: $phone-breakpoint) {
        width: $triangle-width;
        height: $triangle-height;
      }

      @media screen and (min-width: $desktop-breakpoint) {
        width: $triangle-width-desktop;
        height: $triangle-height-desktop;
      }
    }
  }
}

@each $project, $colour in $project-colours {
  body:global(.#{$project}) {
    $primary: $colour;
    .interactiveIcons {
      .iconContainer {
        .shape {
          .label {
            @media screen and (min-width: $phone-breakpoint) {
              border-bottom-color: $primary;
            }
          }
        }
      }
    }
  }
}
</style>
