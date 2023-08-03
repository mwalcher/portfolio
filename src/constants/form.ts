import type { IsFormField } from '@/types/form';

export const nameField: IsFormField = {
  autocomplete: 'name',
  label: 'Name',
  name: 'name',
  required: true,
  type: 'text',
};

const emailField: IsFormField = {
  autocomplete: 'email',
  disclaimer: 'I will only use your email to respond to your message.',
  label: 'Email',
  name: 'email',
  required: true,
  type: 'email',
};

const messageField: IsFormField = {
  label: 'Message',
  name: 'message',
  required: true,
  type: 'textarea',
};

export const contactForm: IsFormField[] = [nameField, emailField, messageField];
