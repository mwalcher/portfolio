import { inlineLink } from '@/helpers';
import type { IsLink } from '@/types/navigation';

export const tophat: IsLink = {
  fullLabel: 'Top Hat Website',
  label: 'Top Hat',
  link: 'https://tophat.com/',
};

export const arcane: IsLink = {
  fullLabel: 'Arcane Website',
  label: 'Arcane',
  link: 'https://thearcane.com/',
};

export const arcaneDisclaimer = `<strong>Note:</strong> I worked on this project as a member of the ${inlineLink(
  arcane,
  true,
)} development team.`;
