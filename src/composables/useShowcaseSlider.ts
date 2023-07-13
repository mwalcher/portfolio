import { useDebounceFn } from '@vueuse/core';
import Flickity from 'flickity';
import { onMounted, onUnmounted } from 'vue';

export default function useShowcaseSlider(selector: string) {
  let flickity: typeof Flickity | null = null;

  function initFlickity() {
    const options = {
      prevNextButtons: true,
      pageDots: false,
      draggable: true,
      adaptiveHeight: true,
      wrapAround: true,
    };

    flickity = new Flickity(selector, options);
    flickity?.resize();
  }

  function resizeFlickity() {
    useDebounceFn(() => initFlickity(), 250);
  }

  onMounted(() => {
    setTimeout(() => {
      initFlickity();
      window.addEventListener('resize', resizeFlickity);
    }, 50);
  });

  onUnmounted(() => {
    flickity?.destroy();
    window.removeEventListener('resize', resizeFlickity);
  });
}
