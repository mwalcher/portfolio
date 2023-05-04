import type { FormField } from '@/types/form';

const nameField: FormField = {
  autocomplete: 'name',
  label: 'Name',
  name: 'name',
  required: true,
  type: 'text',
};

const emailField: FormField = {
  autocomplete: 'email',
  disclaimer: 'I will not use your email for anything other than to respond to your message.',
  label: 'Email',
  name: 'email',
  required: true,
  type: 'email',
};

const messageField: FormField = {
  label: 'Message',
  name: 'message',
  required: true,
  type: 'textarea',
};

export const contactForm: FormField[] = [nameField, emailField, messageField];
