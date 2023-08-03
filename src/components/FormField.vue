<script setup lang="ts">
import type { IsFormField } from '@/types/form';
import { computed, ref, useCssModule } from 'vue';

const props = defineProps<{
  formField: IsFormField;
  formId: string;
}>();

const $style = useCssModule();

const fieldValue = ref('');
const error = ref('');
const isFocused = ref(false);

const hasValue = computed(() => !!fieldValue.value);
const hasError = computed(() => !!error.value);
const formFieldId = computed(() => `${props.formId}-${props.formField.name}`);
const formFieldClasses = computed(() => ({
  [$style.inputContainer]: true,
  [props.formField.name]: !!props.formField.name,
  [$style.required]: props.formField.required,
  [$style.active]: isFocused.value || hasValue.value,
  [$style.error]: hasError.value,
}));
const commonFieldProps = computed(() => ({
  id: formFieldId.value,
  name: props.formField.name,
  required: !!props.formField.required || undefined,
  autocomplete: props.formField.autocomplete ? props.formField.autocomplete : undefined,
}));

const onFocus = () => (isFocused.value = true);
const onBlur = (e: FocusEvent) => {
  const formElement = e.target as HTMLInputElement;
  fieldValue.value = formElement?.value;
  isFocused.value = false;
};
</script>

<template>
  <div :class="formFieldClasses">
    <label :for="formFieldId">
      {{ formField.label }}
    </label>

    <textarea
      v-if="formField.type === 'textarea'"
      v-bind="commonFieldProps"
      @focus="onFocus"
      @blur="onBlur"
    />
    <input
      v-else
      :type="formField.type"
      v-bind="commonFieldProps"
      @focus="onFocus"
      @blur="onBlur"
    />

    <small v-if="formField.disclaimer" :class="$style.disclaimer">
      {{ formField.disclaimer }}
    </small>

    <small v-if="hasError" :class="$style.errorMessage">{{ error }}</small>
  </div>
</template>

<style lang="scss" module>
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
    color: $white;
  }

  .disclaimer {
    display: block;
    line-height: $global-font-size;
    margin-top: 0.5rem;
  }
}

@each $project, $colour in $project-colours {
  body:global(.#{$project}) {
    $primary: $colour;
    $primary-dark: darken($primary, 10%);
    .inputContainer {
      &.active:not(.error) {
        input,
        textarea,
        select {
          background-color: $primary-dark;
        }
      }
    }
  }
}
</style>
