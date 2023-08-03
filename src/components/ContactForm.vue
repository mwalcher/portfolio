<script setup lang="ts">
import AlertMessage from '@/components/AlertMessage.vue';
import FormField from '@/components/FormField.vue';
import { contactForm, nameField } from '@/constants/form';
import { successPage } from '@/constants/navigation';
import emailjs from '@emailjs/browser';
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const formId = 'contact-form';
const router = useRouter();
const isProcessing = ref(false);
const hasError = ref(false);

const onSubmit = async (e: Event) => {
  isProcessing.value = true;
  hasError.value = false;

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
    hasError.value = true;
    console.error(error);
  } finally {
    isProcessing.value = false;
  }
};
</script>

<template>
  <form :name="formId" @submit.prevent="onSubmit">
    <AlertMessage
      v-if="hasError"
      message="There was an issue sending the message, try again later."
    />
    <FormField
      v-for="formField in contactForm"
      :key="formField.name"
      :formField="formField"
      :formId="formId"
    />
    <button type="submit" :disabled="isProcessing">Send Message</button>
  </form>
</template>
