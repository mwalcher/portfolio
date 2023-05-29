import { useThrottleFn } from '@vueuse/core';

export default function useHeader() {
  function activeSection() {
    const navigation: HTMLUListElement | null = document.querySelector('#pageNavigation');
    const sections: NodeListOf<HTMLElement> = document.querySelectorAll('.section');
    const scrollPosition = window.pageYOffset;
    const windowHeight = window.innerHeight;
    const activeClass = 'active';

    if (!navigation) return;

    const navigationItems = navigation.querySelectorAll('a');

    sections.forEach((section) => {
      const sectionPosition = section.getBoundingClientRect();
      const sectionOffset = section.offsetTop;
      const sectionHeight = section.offsetHeight;

      let sectionStart = sectionOffset - windowHeight / 2;
      if (sectionOffset <= 0) {
        sectionStart = 0;
      }

      const sectionEnd = sectionOffset + (sectionHeight - windowHeight / 2);

      if (scrollPosition >= sectionStart && scrollPosition < sectionEnd) {
        navigationItems.forEach((navItem) => {
          if (section.id === navItem.href.split('#')[1]) {
            navItem.classList.add(activeClass);
          } else {
            navItem.classList.remove(activeClass);
          }
        });
      }

      if (section.classList.contains('lightSection')) {
        navigationColour(navigation, sectionPosition, navigationItems);
      }
    });
  }

  function navigationColour(
    navigation: HTMLUListElement,
    position: DOMRect,
    navigationItems: NodeListOf<HTMLAnchorElement>,
  ) {
    const logo = document.querySelector('#headerLogo');
    const navigationTitle = document.querySelector('#navigationTitle');
    const darkClass = 'dark';
    const darkTopClass = 'darkTop';
    const darkBottomClass = 'darkBottom';

    const top = position.top;
    const bottom = position.bottom;

    // Logo
    if (top < 56 && bottom > 56) {
      logo?.classList.add(darkClass);
    } else {
      logo?.classList.remove(darkClass);
    }

    // Title
    if (top < 114 && bottom > 114) {
      navigationTitle?.classList.add(darkClass);
    } else {
      navigationTitle?.classList.remove(darkClass);
    }

    // Navigation
    navigationItems.forEach((navItem, index) => {
      const offset = 198 + 64 * index;
      const navParent = navItem.parentNode as HTMLElement;

      if (top < offset && bottom > offset) {
        navParent.classList.add(darkClass);
        if (index === 0) {
          navigation?.classList.add(darkTopClass);
        } else if (index === navigationItems.length - 1) {
          navigation?.classList.add(darkBottomClass);
        }
      } else {
        navParent.classList.remove(darkClass);
        if (index === 0) {
          navigation?.classList.remove(darkTopClass);
        } else if (index === navigationItems.length - 1) {
          navigation?.classList.remove(darkBottomClass);
        }
      }
    });
  }

  window.addEventListener('load', () => activeSection());
  window.addEventListener(
    'scroll',
    useThrottleFn(() => activeSection(), 100),
  );
}
