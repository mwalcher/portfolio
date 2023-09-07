import type { IsFormField } from '@/types/form';
import type { IsLink, IsMenuItem } from '@/types/navigation';
import type { ValidationRuleCollection } from '@vuelidate/core';
import { isRef, type Ref } from 'vue';

export const inlineLink = (linkContent: IsLink, externalLink?: boolean) => {
  const isExternal = typeof externalLink === 'boolean' ? externalLink : false;
  return `<a href="${linkContent.link}" aria-label="${linkContent.fullLabel}" ${
    isExternal ? 'target="_blank" rel="noopener"' : ''
  }>${linkContent.label}</a>`;
};

export const isAnchorLink = (menuLink: IsMenuItem['link']): boolean => menuLink.charAt(0) === '#';

export const scrollToElement = (element: Ref<Element> | Element, offset = 0) => {
  const headerBreakpoint = 740;
  const headerOffset = 80;
  const scrollOffset = window.innerWidth < headerBreakpoint ? headerOffset + offset : offset;
  const elementTop = isRef(element) ? element.value.getBoundingClientRect().top : element.getBoundingClientRect().top;
  const topPosition = window.scrollY + elementTop - scrollOffset;
  window.scrollTo(0, topPosition);
};

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
