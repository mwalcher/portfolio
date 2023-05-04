<script setup lang="ts">
import ContactForm from '@/components/ContactForm.vue';
import { contactMenu, footerId } from '@/constants/navigation';
</script>

<template>
  <footer :id="footerId" class="section" :class="$style.footerSection">
    <div :class="$style.footerContent">
      <div :class="$style.contactContent">
        <h2>Get in Touch</h2>
        <p>Let me know if you have any questions or if you're interested in working together.</p>
        <div :class="$style.contactLinks">
          <a
            v-for="contactItem in contactMenu"
            :key="contactItem.label"
            :href="contactItem.link"
            target="_blank"
            rel="noopener"
            :aria-label="contactItem.fullLabel"
            class="button"
          >
            {{ contactItem.label }}
          </a>
        </div>
      </div>

      <ContactForm />
    </div>
  </footer>
</template>

<style lang="scss" module>
.footerSection {
  display: flex;
  align-items: center;
  justify-content: center;

  &::after {
    content: '';
    display: block;
    min-height: inherit;
  }

  .footerContent {
    display: flex;
    flex-direction: column;
    align-items: center;
    @include spacing(padding, top, md);
    @include spacing(padding, bottom, 0.75rem);
    width: 100%;
    max-width: 42rem;

    @media screen and (min-width: $footer-breakpoint) {
      flex-direction: row;
      align-items: flex-start;
      justify-content: center;
      @include spacing(padding, bottom, md);
    }

    form {
      max-width: 18.75rem;

      @media screen and (min-width: $footer-breakpoint) {
        flex: 0 0 18.75rem;
      }
    }

    .contactContent {
      max-width: 18.75rem;
      text-align: center;
      @include spacing(padding, bottom, sm);

      @media screen and (min-width: $footer-breakpoint) {
        flex: 0 1 20.75rem;
        max-width: 20.75rem;
        text-align: left;
        @include spacing(padding, bottom, 0);
        @include spacing(padding, right, md);
      }

      .contactLinks {
        display: none;

        @media screen and (min-width: $footer-breakpoint) {
          display: block;
        }

        :global(.button) {
          display: block;
          max-width: 12.5rem;
        }
      }
    }
  }
}
</style>
