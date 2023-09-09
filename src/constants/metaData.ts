import HomeMetaImage from '@/assets/images/home-meta-image.png';
import type { IsPageMeta } from '@/types/metaData';

export const defaultMeta: IsPageMeta = {
  title: 'Matthew Walcher - Front-End Web Developer',
  description:
    'Matthew Walcher is a web developer from Toronto, Canada currently living in London, UK. He specializes in front-end web development.',
  image: HomeMetaImage,
  themeColour: '#339933',
};

export const metaImageSize = 1200;

export const titleTemplate = (title?: string) => (!title ? defaultMeta.title : `${title} / ${defaultMeta.title}`);
