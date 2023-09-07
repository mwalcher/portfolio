import type { IsFormField } from '@/types/form';
import type { IsLink, IsMenuItem } from '@/types/navigation';
import type { ValidationRuleCollection } from '@vuelidate/core';

export const inlineLink = (linkContent: IsLink, externalLink?: boolean) => {
  const isExternal = typeof externalLink === 'boolean' ? externalLink : false;
  return `<a href="${linkContent.link}" aria-label="${linkContent.fullLabel}" ${
    isExternal ? 'target="_blank" rel="noopener"' : ''
  }>${linkContent.label}</a>`;
};

export const isAnchorLink = (menuLink: IsMenuItem['link']): boolean => menuLink.charAt(0) === '#';

export const getFormModel = (formFields: IsFormField[]): { [key: string]: string } => {
  return formFields.reduce(
    (_, { name }) =>
      Object.assign(_, {
        [name]: '',
      }),
    {},
  );
};

export const getValidation = (formFields: IsFormField[]): ValidationRuleCollection => {
  return formFields
    .filter(({ validation }) => validation)
    .reduce(
      (_, { name, validation }) =>
        Object.assign(_, {
          [name]: validation,
        }),
      {},
    );
};
