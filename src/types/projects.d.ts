export interface IsProject {
  key: string;
  name: string;
  description: string;
  image: string;
  website?: string;
  disabled?: boolean;
  component: object;
  tabContent: {
    about: IsTabContentItem.content;
    technical: IsTabContentItem.content;
  };
}

export type ProjectsList = IsProject[];
