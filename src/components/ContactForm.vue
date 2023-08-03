<script setup lang="ts">
import FormField from '@/components/FormField.vue';
import { contactForm } from '@/constants/form';
import emailjs from '@emailjs/browser';

const formId = 'contact-form';

const onSubmit = async (e: Event) => {
  const form = e.target as HTMLFormElement;

  try {
    const response = await emailjs.sendForm(
      import.meta.env.VITE_EMAILJS_SERVICE_ID,
      import.meta.env.VITE_EMAILJS_TEMPLATE_ID,
      form,
      import.meta.env.VITE_EMAILJS_KEY,
    );

    if (response.status === 200) {
      console.log('on success');
    }
  } catch (error) {
    console.log({ error }, error);
  }
};
</script>

<template>
  <form :name="formId" @submit.prevent="onSubmit">
    <FormField
      v-for="formField in contactForm"
      :key="formField.name"
      :formField="formField"
      :formId="formId"
    />
    <button type="submit">Send Message</button>
  </form>
</template>
