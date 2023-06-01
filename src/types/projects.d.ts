export interface IsProject {
  key: string;
  name: string;
  description: string;
  image: string;
  website?: string;
  disabled?: boolean;
  component: object;
}

export type ProjectsList = IsProject[];
