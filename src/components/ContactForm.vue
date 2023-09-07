<script setup lang="ts">
import AlertMessage from '@/components/AlertMessage.vue';
import FormField from '@/components/FormField.vue';
import { contactForm, nameField } from '@/constants/form';
import { successPage } from '@/constants/navigation';
import { getValidation, getFormModel } from '@/helpers';
import emailjs from '@emailjs/browser';
import { useVuelidate } from '@vuelidate/core';
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const formId = 'contact-form';
const router = useRouter();
const isProcessing = ref(false);
const hasError = ref(false);
const model = ref(getFormModel(contactForm));

const v$ = useVuelidate(getValidation(contactForm), model);

const onChange = (fieldId: string, e: Event) => {
  const value = (e.target as HTMLInputElement).value;
  model.value = {
    ...model.value,
    [fieldId]: value,
  };
};

const onSubmit = async (e: Event) => {
  isProcessing.value = true;
  hasError.value = false;

  const form = e.target as HTMLFormElement;
  const isValid = await v$.value.$validate();

  if (!isValid) {
    isProcessing.value = false;
    return;
  }

  try {
    const response = await emailjs.sendForm(
      import.meta.env.VITE_EMAILJS_SERVICE_ID,
      import.meta.env.VITE_EMAILJS_TEMPLATE_ID,
      form,
      import.meta.env.VITE_EMAILJS_KEY,
    );

    if (response.status === 200) {
      const nameValue = model.value[nameField.name];
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
  <form :name="formId" @submit.prevent="onSubmit" novalidate>
    <AlertMessage v-if="hasError" message="There was an issue sending the message, try again later." />
    <FormField
      v-for="formField in contactForm"
      :key="formField.name"
      :formField="formField"
      :formId="formId"
      @onChange="(e: Event) => onChange(formField.name, e)"
    />
    <button type="submit" :disabled="isProcessing">Send Message</button>
  </form>
</template>
