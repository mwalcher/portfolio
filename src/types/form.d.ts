import type { ValidationRuleCollection } from '@vuelidate/core';

export type FormFieldType = 'email' | 'text' | 'textarea';

export interface IsFormField {
  autocomplete?: string;
  disclaimer?: string;
  label: string;
  name: string;
  required: boolean;
  type: FormFieldType;
  validation?: ValidationRuleCollection;
}
