<script setup lang="ts">
import FormField from '@/components/FormField.vue';
import { contactForm, nameField } from '@/constants/form';
import { successPage } from '@/constants/navigation';
import emailjs from '@emailjs/browser';
import { useRouter } from 'vue-router';

const formId = 'contact-form';
const router = useRouter();

const onSubmit = async (e: Event) => {
  const form = e.target as HTMLFormElement;
  const formData = new FormData(form);

  try {
    const response = await emailjs.sendForm(
      import.meta.env.VITE_EMAILJS_SERVICE_ID,
      import.meta.env.VITE_EMAILJS_TEMPLATE_ID,
      form,
      import.meta.env.VITE_EMAILJS_KEY,
    );

    if (response.status === 200) {
      const nameValue = formData.get(nameField.name) as string;
      router.push({ name: successPage.name, query: { name: nameValue ? nameValue : '' } });
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
