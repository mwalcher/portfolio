<script setup lang="ts">
defineProps<{
  message: string;
}>();
</script>

<template>
  <div :class="$style['alertMessage']">
    <span class="fa fas fa-exclamation-triangle" :class="$style['icon']" />
    <p :class="$style['message']">{{ message }}</p>
  </div>
</template>

<style lang="scss" module>
.alertMessage {
  display: flex;
  align-items: baseline;
  background-color: $red;
  @include spacing(margin, top bottom, sm);
  @include spacing(padding, all, sm);
  border: $global-border-width solid $white;
  border-radius: $global-border-radius;

  &:first-child {
    margin-top: 0;
  }

  &:last-child {
    margin-bottom: 0;
  }

  .icon {
    @include spacing(margin, right, xs);
  }

  .message {
    color: $white;
  }
}
</style>
