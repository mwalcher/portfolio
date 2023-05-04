export interface Project {
  key: string;
  name: string;
  description: string;
  image: string;
  website?: string;
  disabled?: boolean;
}

export type ProjectsList = Project[];
