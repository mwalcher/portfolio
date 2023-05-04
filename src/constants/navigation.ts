import Resume from '@/assets/images/mwalcher-resume.pdf';
import type { Menu, MenuItem } from '@/types/navigation';

export const footerId = 'contact';

export const homeNav: MenuItem = {
  fullLabel: 'Homepage',
  icon: 'hidden',
  label: 'Back to Home',
  link: 'home',
};

export const contactNav: MenuItem = {
  fullLabel: 'Contact Matthew Walcher',
  icon: 'fa-envelope',
  label: 'Contact',
  link: `#${footerId}`,
};

export const githubContact: MenuItem = {
  fullLabel: 'Matthew Walcher on Github',
  icon: 'fa-github',
  label: 'Github',
  link: 'https://github.com/mwalcher',
};

export const linkedinContact: MenuItem = {
  fullLabel: 'Matthew Walcher on LinkedIn',
  icon: 'fa-linkedin',
  label: 'LinkedIn',
  link: 'https://www.linkedin.com/in/mwalcher/',
};

export const resumeContact: MenuItem = {
  fullLabel: "Matthew Walcher's Resume",
  icon: 'fa-file-text',
  label: 'Resume',
  link: Resume,
};

export const contactMenu: Menu = [githubContact, linkedinContact, resumeContact];
