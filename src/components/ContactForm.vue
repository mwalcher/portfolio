<script setup lang="ts">
import FormField from '@/components/FormField.vue';
import { contactForm } from '@/constants/form';

const formId = 'contact-form';
</script>

<template>
  <form :name="formId">
    <FormField
      v-for="formField in contactForm"
      :key="formField.name"
      :formField="formField"
      :formId="formId"
    />
    <button type="submit">Send Message</button>
  </form>
</template>
