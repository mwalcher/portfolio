import Resume from '@/assets/images/mwalcher-resume.pdf';
import type { IsMenuItem, Menu } from '@/types/navigation';

export const footerId = 'contact';

export const successPage = {
  path: '/thank-you',
  name: 'thank-you',
};

export const homeNav: IsMenuItem = {
  fullLabel: 'Homepage',
  icon: 'hidden',
  label: 'Back to Home',
  link: 'home',
};

export const contactNav: IsMenuItem = {
  fullLabel: 'Contact Matthew Walcher',
  icon: 'fa-envelope',
  label: 'Contact',
  link: `#${footerId}`,
};

export const githubContact: IsMenuItem = {
  fullLabel: 'Matthew Walcher on Github',
  icon: 'fa-github',
  label: 'Github',
  link: 'https://github.com/mwalcher',
};

export const linkedinContact: IsMenuItem = {
  fullLabel: 'Matthew Walcher on LinkedIn',
  icon: 'fa-linkedin',
  label: 'LinkedIn',
  link: 'https://www.linkedin.com/in/mwalcher/',
};

export const resumeContact: IsMenuItem = {
  fullLabel: "Matthew Walcher's Resume",
  icon: 'fa-file-text',
  label: 'Resume',
  link: Resume,
};

export const contactMenu: Menu = [githubContact, linkedinContact, resumeContact];
