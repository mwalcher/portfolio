export type FormFieldType = 'email' | 'text' | 'textarea';

export interface FormField {
  autocomplete?: string;
  disclaimer?: string;
  label: string;
  name: string;
  required: boolean;
  type: FormFieldType;
}
