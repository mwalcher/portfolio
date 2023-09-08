export default function useHeader() {
  const activeClass = 'active';
  const darkClass = 'dark';
  const darkTopClass = 'darkTop';
  const darkBottomClass = 'darkBottom';
  const lightSectionClass = 'lightSection';

  function activeSection() {
    const navigation: HTMLUListElement | null = document.querySelector('#pageNavigation');

    if (!navigation) return;

    const sections: NodeListOf<HTMLElement> = document.querySelectorAll('.section');
    const navigationItems = navigation.querySelectorAll('[data-page-nav-link]') as NodeListOf<HTMLButtonElement>;
    const scrollPosition = window.scrollY;
    const windowHeight = window.innerHeight;

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
          const anchorId = navItem.dataset.pageNavLink;
          if (anchorId && section.id === anchorId.split('#')[1]) {
            navItem.classList.add(activeClass);
          } else {
            navItem.classList.remove(activeClass);
          }
        });
      }

      if (section.classList.contains(lightSectionClass)) {
        navigationColour(navigation, sectionPosition, navigationItems);
      }
    });
  }

  function navigationColour(
    navigation: HTMLUListElement,
    position: DOMRect,
    navigationItems: NodeListOf<HTMLButtonElement>,
  ) {
    const logo: HTMLAnchorElement | null = document.querySelector('#headerLogo');
    const navigationTitle: HTMLHeadingElement | null = document.querySelector('#navigationTitle');

    const { top, bottom } = position;

    // Logo
    if (logo) {
      const logoOffset = logo.offsetTop;
      const logoHeight = logo.offsetHeight;
      const logoTransitionPoint = logoHeight / 2 + logoOffset;

      if (top < logoTransitionPoint && bottom > logoTransitionPoint) {
        logo.classList.add(darkClass);
      } else {
        logo.classList.remove(darkClass);
      }
    }

    // Title
    if (navigationTitle) {
      const titleOffset = navigationTitle.offsetTop;
      const titleHeight = navigationTitle.offsetHeight;
      const titleTransitionPoint = titleHeight / 2 + titleOffset;

      if (top < titleTransitionPoint && bottom > titleTransitionPoint) {
        navigationTitle?.classList.add(darkClass);
      } else {
        navigationTitle?.classList.remove(darkClass);
      }
    }

    // Navigation
    navigationItems.forEach((navItem, index) => {
      const navParent = navItem.parentNode as HTMLElement;
      const navParentHeight = navParent.offsetHeight;
      const navOffset = navigation.offsetTop;
      const navItemOffset = navItem.offsetTop;
      const navItemTransitionPoint = navOffset + navItemOffset * 2 + navParentHeight * index;
      const isFirstNavItem = index === 0;
      const isLastNavItem = index === navigationItems.length - 1;

      if (top < navItemTransitionPoint && bottom > navItemTransitionPoint) {
        navParent.classList.add(darkClass);
        if (isFirstNavItem) {
          navigation?.classList.add(darkTopClass);
        } else if (isLastNavItem) {
          navigation?.classList.add(darkBottomClass);
        }
      } else {
        navParent.classList.remove(darkClass);
        if (isFirstNavItem) {
          navigation?.classList.remove(darkTopClass);
        } else if (isLastNavItem) {
          navigation?.classList.remove(darkBottomClass);
        }
      }
    });
  }

  window.addEventListener('load', () => activeSection());
  window.addEventListener('scroll', () => activeSection());
}
