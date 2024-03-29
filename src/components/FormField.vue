<script setup lang="ts">
import type { IsFormField } from '@/types/form';
import type { ErrorObject } from '@vuelidate/core';
import { computed, ref, useCssModule } from 'vue';

const props = defineProps<{
  formField: IsFormField;
  formId: string;
  errors: ErrorObject;
}>();
const emit = defineEmits(['onChange']);
const $style = useCssModule();

const fieldValue = ref('');
const isFocused = ref(false);
const hasValue = computed(() => !!fieldValue.value);
const hasError = computed(() => !!Object.keys(props.errors).length);
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
const onChange = (e: Event) => {
  emit('onChange', e);
};
</script>

<template>
  <div :class="formFieldClasses">
    <label :for="formFieldId" :class="$style.label">
      {{ formField.label }}
    </label>

    <textarea
      v-if="formField.type === 'textarea'"
      v-bind="commonFieldProps"
      @focus="onFocus"
      @blur="onBlur"
      @change="onChange"
    />
    <input v-else :type="formField.type" v-bind="commonFieldProps" @focus="onFocus" @blur="onBlur" @change="onChange" />

    <small v-if="formField.disclaimer" :class="$style.disclaimer">
      {{ formField.disclaimer }}
    </small>

    <small v-for="error of errors" :key="error.$uid" :class="$style.errorMessage">{{ error.$message }}</small>
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
    .label {
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
    .label {
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

    .label {
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

  .label {
    display: flex;
    position: absolute;
    top: 0.875rem;
    left: 0.875rem;
    @include transition(font-size top);
  }

  .errorMessage {
    @extend .label;
    @include label-font;
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
