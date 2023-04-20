<script setup lang="ts">
import type { Menu } from '@/types/navigation';
import Resume from '@/assets/images/mwalcher-resume.pdf';
import { useRoute } from 'vue-router';

defineProps<{
  menu: Menu;
}>();

const currentRoute = useRoute();

const contactMenu = [
  {
    fullLabel: 'Matthew Walcher on Github',
    icon: 'fa-github',
    label: 'Github',
    link: 'https://github.com/mwalcher',
  },
  {
    fullLabel: 'Matthew Walcher on LinkedIn',
    icon: 'fa-linkedin',
    label: 'LinkedIn',
    link: 'https://www.linkedin.com/in/mwalcher/',
  },
  {
    fullLabel: "Matthew Walcher's Resume",
    icon: 'fa-file-text',
    label: 'Resume',
    link: Resume,
  },
];
</script>

<template>
  <nav :class="$style.headerNavigation">
    <h2>Navigation</h2>

    <ul :class="$style.pageNavigation">
      <li
        v-for="menuItem in menu"
        :key="menuItem.label"
        :class="{ [$style.hidden]: menuItem.icon === 'hidden' }"
      >
        <a :href="menuItem.link" :aria-label="menuItem.fullLabel">
          <span class="fa" :class="[menuItem.icon, $style.icon]" :aria-hidden="true" />
          <span>{{ menuItem.label }}</span>
        </a>
      </li>
    </ul>

    <ul :class="$style.linksNavigation">
      <li v-for="contactItem in contactMenu" :key="contactItem.label">
        <a
          :href="contactItem.link"
          target="_blank"
          rel="noopener"
          :aria-label="contactItem.fullLabel"
        >
          <span class="fa" :class="[contactItem.icon, $style.icon]" :aria-hidden="true" />
          <span>{{ contactItem.label }}</span>
        </a>
      </li>
    </ul>

    <RouterLink
      v-if="currentRoute.name !== 'home'"
      :to="{ name: 'home' }"
      class="button"
      :class="$style.homeButton"
      aria-label="Homepage"
    >
      Back to Home
    </RouterLink>
  </nav>
</template>

<style lang="scss" module>
.headerNavigation {
  position: absolute;
  top: $header-height;
  right: 0;
  display: flex;
  transform: translateX(100%);
  box-shadow: $global-shadow;
  @include transition(transform);

  @media screen and (min-width: $header-breakpoint) {
    position: static;
    top: auto;
    right: auto;
    display: block;
    transform: none;
    box-shadow: none;
    @include transition(none);
    @include spacing(padding, top, 1.5rem);
  }

  h2 {
    display: none;
    color: $white-off;
    font-size: 0.9375rem;
    @include transition(color);

    @media screen and (min-width: $header-breakpoint) {
      display: block;
    }

    &.dark {
      color: $black;
    }
  }

  .homeButton {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: $black;
    @include spacing(padding, all, $button-padding);
    border-top: 0;
    border-right: 0;

    @media screen and (min-width: $header-breakpoint) {
      display: none;
    }
  }

  ul {
    background-color: $black;
    border-left: $global-border-width solid $white-off;

    @media screen and (min-width: $header-breakpoint) {
      background-color: transparent;
      border-left: 0;
    }

    &.pageNavigation {
      @media screen and (min-width: $header-breakpoint) {
        position: relative;
        margin-top: $medium-size;
        margin-bottom: 0.625rem;
        margin-left: $extra-small-size;
        @include spacing(padding, top bottom, 1.5rem);
      }

      &.dark-top {
        &::before {
          @media screen and (min-width: $header-breakpoint) {
            border-bottom-color: $black;
          }
        }
      }

      &.dark-bottom {
        &::after {
          @media screen and (min-width: $header-breakpoint) {
            border-top-color: $black;
          }
        }
      }

      &::before,
      &::after {
        @media screen and (min-width: $header-breakpoint) {
          position: absolute;
          left: -0.0625rem;
          width: 0;
          height: 0;
          border: 0.5rem solid transparent;
          @include transition(border-color);
        }
      }

      &::before {
        @media screen and (min-width: $header-breakpoint) {
          content: '';
          top: 0;
          transform: translate(-50%, -100%);
          border-top: 0;
          border-bottom: 0.625rem solid $white-off;
        }
      }

      &::after {
        @media screen and (min-width: $header-breakpoint) {
          content: '';
          bottom: 0;
          transform: translate(-50%, 100%);
          border-top: 0.625rem solid $white-off;
          border-bottom: 0;
        }
      }

      li {
        @media screen and (min-width: $header-breakpoint) {
          position: relative;
          @include spacing(padding, top bottom, 1.5rem);
        }

        &.dark {
          &::before,
          &::after {
            @media screen and (min-width: $header-breakpoint) {
              border-color: $black;
            }
          }

          a {
            @media screen and (min-width: $header-breakpoint) {
              color: $black;
            }

            &::before {
              @media screen and (min-width: $header-breakpoint) {
                border-color: $black;
              }
            }

            &:hover,
            &:focus {
              &::before {
                @media screen and (min-width: $header-breakpoint) {
                  background-color: $black;
                }
              }
            }
          }
        }

        &::before,
        &::after {
          @media screen and (min-width: $header-breakpoint) {
            content: '';
            position: absolute;
            left: 0;
            transform: translateX(-100%);
            height: 3rem;
            border-left: 0.125rem solid $white-off;
            @include transition(border-color);
          }
        }

        &::before {
          @media screen and (min-width: $header-breakpoint) {
            top: -1.5rem;
          }
        }

        &::after {
          @media screen and (min-width: $header-breakpoint) {
            top: 2.5rem;
          }
        }

        &:first-child {
          &::after {
            @media screen and (min-width: $header-breakpoint) {
              display: none;
            }
          }
        }

        &:last-child {
          &::before {
            @media screen and (min-width: $header-breakpoint) {
              display: none;
            }
          }
        }

        a {
          @media screen and (min-width: $header-breakpoint) {
            position: relative;
            @include spacing(padding, left, 1.5rem);
            @include transition(color);
          }

          &::before {
            @media screen and (min-width: $header-breakpoint) {
              content: '';
              position: absolute;
              top: 50%;
              left: -0.0625rem;
              transform: translate(-50%, -50%);
              width: $small-size;
              height: $small-size;
              background-color: transparent;
              border: 0.125rem solid $white-off;
              border-radius: 100%;
              @include transition(background-color border-color);
            }
          }

          &:hover,
          &:focus {
            outline: none;
            &::before {
              @media screen and (min-width: $header-breakpoint) {
                background-color: $white-off;
              }
            }
          }

          &.active,
          &:hover.active,
          &:focus.active {
            &::before {
              @media screen and (min-width: $header-breakpoint) {
                background-color: $primary;
              }
            }
          }
        }
      }
    }

    &.linksNavigation {
      @media screen and (min-width: $header-breakpoint) {
        display: none;
      }
    }

    li {
      text-align: center;
      width: 6.25rem;
      height: 6.25rem;
      @include spacing(padding, top bottom, xs);
      border-bottom: $global-border-width solid $white-off;

      @media screen and (min-width: $header-breakpoint) {
        text-align: left;
        width: auto;
        height: auto;
        border-bottom: 0;
      }

      &.hidden {
        display: none;
        @media screen and (min-width: $header-breakpoint) {
          display: list-item;
        }
      }

      a {
        display: block;
        color: $white-off;
        text-transform: uppercase;

        &.active {
          .icon {
            &::before {
              color: $primary;
            }
          }
        }

        .icon {
          position: relative;
          display: block;
          width: 3.75rem;
          height: 3.75rem;
          @include spacing(margin, left right, auto);
          @include spacing(margin, bottom, xs);
          background-color: $white-off;
          border-radius: 100%;

          @media screen and (min-width: $header-breakpoint) {
            display: none;
          }

          &::before {
            color: $black;
            font-size: 2rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            @include transition(color);
          }

          &:global(.fa-github),
          &:global(.fa-mobile) {
            &::before {
              font-size: 3rem;
            }
          }
        }
      }
    }
  }
}
</style>
