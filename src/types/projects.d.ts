export interface IsProject {
  key: string;
  name: string;
  description: string;
  image: string;
  website?: string;
  disabled?: boolean;
}

export type ProjectsList = IsProject[];
