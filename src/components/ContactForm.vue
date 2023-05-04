<script setup lang="ts">
import { contactForm } from '@/constants/form';
import type { FormField } from '@/types/form';

const formId = 'contact-form';
const formFieldId = (fieldName: FormField['name']) => `${formId}-${fieldName}`;

const error = '';
</script>

<template>
  <form :name="formId" :class="$style.contactForm">
    <div
      v-for="formField in contactForm"
      :key="formField.name"
      :class="[
        $style.inputContainer,
        formField.name,
        {
          [$style.required]: formField.required,
          [$style.active]: false,
          [$style.error]: false,
        },
      ]"
    >
      <label :for="formFieldId(formField.name)">
        {{ formField.label }}
      </label>

      <textarea
        v-if="formField.type === 'textarea'"
        :id="formFieldId(formField.name)"
        :name="formField.name"
        :required="!!formField.required || undefined"
        :autocomplete="!!formField.autocomplete ? formField.autocomplete : undefined"
      />
      <input
        v-else
        :id="formFieldId(formField.name)"
        :type="formField.type"
        :name="formField.name"
        :required="!!formField.required || undefined"
        :autocomplete="!!formField.autocomplete ? formField.autocomplete : undefined"
      />

      <small v-if="formField.disclaimer" :class="$style.disclaimer">
        {{ formField.disclaimer }}
      </small>

      <small v-if="error" :class="$style.errorMessage">{{ error }}</small>
    </div>

    <button type="submit">Send Message</button>
  </form>
</template>

<style lang="scss" module>
.contactForm {
  .inputContainer {
    position: relative;
    width: 100%;
    @include spacing(margin, bottom, 0.75rem);

    @media screen and (min-width: $phone-breakpoint) {
      @include spacing(margin, bottom, sm);
    }

    &.required {
      label {
        &::after {
          content: '*';
        }
      }

      .errorMessage {
        &::after {
          content: none;
        }
      }
    }

    &.active {
      label {
        font-size: 0.75rem;
        top: 0.5rem;
        pointer-events: none;
      }

      &:not(.error) {
        input,
        textarea,
        select {
          background-color: map-get($input-light, active-background-colour);
        }
      }
    }

    &.error {
      @extend .active;

      label {
        opacity: 0;
      }

      .errorMessage {
        opacity: 1;
      }

      input,
      textarea,
      select {
        background-color: map-get($input-light, error-background-colour);
      }
    }

    &.phone {
      @include invisible;
    }

    label {
      display: flex;
      position: absolute;
      top: 0.875rem;
      left: 0.875rem;
      @include transition(font-size top);
    }

    .errorMessage {
      @extend label;
    }

    .disclaimer {
      display: block;
      line-height: $global-font-size;
      margin-top: 0.5rem;
    }
  }
}
</style>
