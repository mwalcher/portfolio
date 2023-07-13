declare module 'flickity' {
  const Flickity: {
    new (el: string | HTMLElement, options?: Record<string, unknown>);
    destroy();
    resize();
  };
  export = Flickity;
}
