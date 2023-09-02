import type { IsFormField } from '@/types/form';
import { email, helpers, required } from '@vuelidate/validators';

export const nameField: IsFormField = {
  autocomplete: 'name',
  label: 'Name',
  name: 'name',
  required: true,
  type: 'text',
  validation: {
    required: helpers.withMessage('Name is required', required),
  },
};

const emailField: IsFormField = {
  autocomplete: 'email',
  disclaimer: 'I will only use your email to respond to your message.',
  label: 'Email',
  name: 'email',
  required: true,
  type: 'email',
  validation: {
    required: helpers.withMessage('Email is required', required),
    email: helpers.withMessage('Email is not a valid email', email),
  },
};

const messageField: IsFormField = {
  label: 'Message',
  name: 'message',
  required: true,
  type: 'textarea',
  validation: {
    required: helpers.withMessage('Message is required', required),
  },
};

export const contactForm: IsFormField[] = [nameField, emailField, messageField];
