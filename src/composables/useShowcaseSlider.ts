import { useDebounceFn } from '@vueuse/core';
import Flickity from 'flickity';

export default function useShowcaseSlider(selector: string) {
  function initFlickity() {
    const options = {
      prevNextButtons: true,
      pageDots: false,
      draggable: true,
      adaptiveHeight: true,
      wrapAround: true,
    };

    const slider = new Flickity(selector, options);

    slider.resize();
  }

  window.addEventListener('load', () => initFlickity());
  window.addEventListener(
    'resize',
    useDebounceFn(() => initFlickity(), 250),
  );
}
