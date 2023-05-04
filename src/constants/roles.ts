import { inlineLink } from '@/helpers';
import type { Link } from '@/types/navigation';

export const tophat: Link = {
  fullLabel: 'Top Hat Website',
  label: 'Top Hat',
  link: 'https://tophat.com/',
};

export const arcane: Link = {
  fullLabel: 'Arcane Website',
  label: 'Arcane',
  link: 'https://thearcane.com/',
};

export const arcaneDisclaimer = `<strong>Note:</strong> I worked on this project as a member of the ${inlineLink(
  arcane,
  true,
)} development team.`;
