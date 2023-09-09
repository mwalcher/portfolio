export interface IsProject {
  key: string;
  name: string;
  description: string;
  image: string;
  metaImage: string;
  themeColour: string;
  website?: string;
  disabled?: boolean;
  component: object;
  tabContent: {
    about: IsTabContentItem.content;
    technical: IsTabContentItem.content;
  };
  sliderImages: {
    src: string;
    alt: string;
  }[];
}

export type ProjectsList = IsProject[];
