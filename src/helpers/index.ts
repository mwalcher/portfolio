import type { Link } from '@/types/navigation';

export const inlineLink = (linkContent: Link, externalLink?: boolean) => {
  const isExternal = typeof externalLink === 'boolean' ? externalLink : false;
  return `<a href="${linkContent.link}" aria-label="${linkContent.fullLabel}" ${
    isExternal ? 'target="_blank" rel="noopener"' : ''
  }>${linkContent.label}</a>`;
};
