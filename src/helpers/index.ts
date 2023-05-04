import type { Link } from '@/types/navigation';

export const inlineLink = (link: Link, externalLink?: boolean) => {
  const isExternal = typeof externalLink === 'boolean' ? externalLink : false;
  return `<a href="${link.link}" aria-label="${link.fullLabel}" ${
    isExternal ? 'target="_blank" rel="noopener"' : ''
  }>${link.label}</a>`;
};
