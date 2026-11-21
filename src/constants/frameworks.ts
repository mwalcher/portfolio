import GitIcon from '@/assets/images/icon-git.svg?url';
import LaravelIcon from '@/assets/images/icon-laravel.svg?url';
import ReactIcon from '@/assets/images/icon-react.svg?url';
import VueIcon from '@/assets/images/icon-vue-js.svg?url';
import type { IsTabContentListItem } from '@/types/components';

/* TODO:
    - Update framework icons to be current (maybe redesign component)
    - Review items from resume to include here
    - Rounded square containers for the icons that levitate with a shadow on hover
    - Split into Languages & Libraries? Or Frameworks?
*/

export const git: IsTabContentListItem = {
  fullLabel: 'Git Website',
  icon: GitIcon,
  label: 'Git',
  link: 'https://git-scm.com/',
};

export const laravel: IsTabContentListItem = {
  fullLabel: 'Laravel Website',
  icon: LaravelIcon,
  label: 'Laravel',
  link: 'https://laravel.com/',
};

export const react: IsTabContentListItem = {
  fullLabel: 'React Website',
  icon: ReactIcon,
  label: 'React',
  link: 'https://reactjs.org/',
};

export const vue: IsTabContentListItem = {
  fullLabel: 'Vue.js Website',
  icon: VueIcon,
  label: 'Vue.js',
  link: 'https://vuejs.org/',
};
