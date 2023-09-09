import { inlineLink } from '@/helpers';
import type { IsLink } from '@/types/navigation';

export const arcane: IsLink = {
  fullLabel: 'Arcane Website',
  label: 'Arcane',
  link: 'https://thearcane.com/',
};

export const tophat: IsLink = {
  fullLabel: 'Top Hat Website',
  label: 'Top Hat',
  link: 'https://tophat.com/',
};

export const clearco: IsLink = {
  fullLabel: 'Clearco Website',
  label: 'Clearco',
  link: 'https://clear.co/',
};

export const drdoctor: IsLink = {
  fullLabel: 'DrDoctor Website',
  label: 'DrDoctor',
  link: 'https://www.drdoctor.co.uk/',
};

export const arcaneDisclaimer = `<strong>Note:</strong> I worked on this project as a member of the ${inlineLink(
  arcane,
  true,
)} development team.`;
