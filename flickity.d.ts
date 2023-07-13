declare module 'flickity' {
  const Flickity: {
    new (el: string | HTMLElement, options?: Record<string, unknown>): this;
    destroy();
    resize();
  };
  export = Flickity;
}
