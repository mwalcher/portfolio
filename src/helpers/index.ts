import type { IsLink, IsMenuItem } from '@/types/navigation';

export const inlineLink = (linkContent: IsLink, externalLink?: boolean) => {
  const isExternal = typeof externalLink === 'boolean' ? externalLink : false;
  return `<a href="${linkContent.link}" aria-label="${linkContent.fullLabel}" ${
    isExternal ? 'target="_blank" rel="noopener"' : ''
  }>${linkContent.label}</a>`;
};

export const isAnchorLink = (menuLink: IsMenuItem['link']): boolean => menuLink.charAt(0) === '#';
